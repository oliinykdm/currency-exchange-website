<?
Class Auth {
    const cookieName = 'currentUser';
    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Auth();
        }
        return self::$instance;
    }
    private $currentUser;

    public function logout()
    {
        if(Session::instance()->delete(self::cookieName)) {
            $this->currentUser = null;
            return ['success' => true];
        }
        else
        {
            return ['success' => false];
        }

    }

    public function getCurrentUserId()
    {
        return Session::instance()->get(self::cookieName);
    }

    public function setCurrentUserId($id)
    {
        Session::instance()->set(self::cookieName, $id);
    }

    public function getCurrentUser()
    {
        if ($this->isLogged()) {
            if (isset($this->currentUser)) {
                return $this->currentUser;
            } else {
                return Model\UsersQuery::create()->findOneById($this->getCurrentUserId());
            }
        } else {
            return null;
        }
    }

    public static function calcPasswordHash($password)
    {
        return sha1(md5($password));
    }
    public static function calcRecoverHash()
    {
        return sha1(md5(rand(32, 32767).time()));
    }

    public function sendRecoverCode($email, $key) {
        $config = Arr::get(Kohana::$config->load('email')->as_array(), 'default');
        $changePassLink = URL::base('http', TRUE) . 'command/changepass/' . $key;
        $tpl = View::factory('emails/recover');
        $tpl = str_replace("%sitename%", Model\SettingsQuery::create()->findOneByName('sitename')->getValue(), $tpl);
        $tpl = str_replace("%email%", $email, $tpl);
        $tpl = str_replace("%changePassLink%", $changePassLink, $tpl);
        $message = Swift_Message::newInstance()
            ->setFrom(array($config['fromEmail'] => $config['fromName']))
            ->setTo($email)
            ->setSubject('Смена пароля')
            ->setBody($tpl, 'text/html');
        return Email::send($message) != 0;
    }
    public function change_password($password, $key) {
        $user = Model\UsersQuery::create()->findOneByRecoverKey($key);
        if(!$user) {
           return false;
        }
        else
        {
            $user->setPassword(self::calcPasswordHash($password));
            $user->setRecoverKey(self::calcRecoverHash());
            if($user->save()) {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    public function loginHandler($email, $password)
    {
            $user = Model\UsersQuery::create()->findOneByEmail($email);
            if(!$user) {
                return false;
            }
            elseif($user) {
                if($user->getPassword() === $this->calcPasswordHash($password)) {
                    if(Session::instance()->set(self::cookieName, $user->getId())) {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                else {
                    return false;
                }
            }
        else
        {
            return false;
        }
    }
    public function recoverHandler($email)
    {
        $user = Model\UsersQuery::create()->findOneByEmail($email);
        if(!$user) {
            return false;
        }
        elseif($user) {
          return $this->sendRecoverCode($email, $user->getRecoverKey());
        }
        else
        {
            return false;
        }
    }

    public function login($email, $password) {
         return $this->loginHandler($email, $password);
    }
    public function recover($email) {
        return $this->recoverHandler($email);
    }
    public function isLogged()
    {
        $user = $this->getCurrentUserId();
        return !empty($user);
    }

    public function isAdmin()
    {
        $user = $this->getCurrentUser();
        if (isset($user)) {
            return $user->getRole() == 1;
        } else {
            return null;
        }
    }


    private function __construct(){ /* ... @return Singleton */ }
    private function __clone()    { /* ... @return Singleton */ }
    private function __wakeup()   { /* ... @return Singleton */ }
}