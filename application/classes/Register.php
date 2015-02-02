<?
Class Register {
    var $activationLink;
    public static function genActivationCode()
    {
        return sha1(md5(time().time()));
    }
    public function sendActivationCode($email) {
        $config = Arr::get(Kohana::$config->load('email')->as_array(), 'default');
        $activationLink = URL::base('http', TRUE) . 'command/activate/' . $this->activationLink;
        $tpl = View::factory('emails/activation');
        $tpl = str_replace("%sitename%", Model\SettingsQuery::create()->findOneByName('sitename')->getValue(), $tpl);
        $tpl = str_replace("%email%", $email, $tpl);
        $tpl = str_replace("%activationLink%", $activationLink, $tpl);
        $message = Swift_Message::newInstance()
            ->setFrom(array($config['fromEmail'] => $config['fromName']))
            ->setTo($email)
            ->setSubject('Активационное письмо')
            ->setBody($tpl, 'text/html');
        return Email::send($message) != 0;
    }
    public function init($params)
    {
        foreach($params as $param) {
            $addUser = new Model\UsersPrepare();
            $addUser->setUsername($param['username']);
            $addUser->setEmail($param['email']);
            $addUser->setPassword(Auth::calcPasswordHash($param['password']));
            $addUser->setActivationCode($this->activationLink = self::genActivationCode());
            if($addUser->save()) {
                return $this->sendActivationCode($param['email']);
            }
            else
            {
                return false;
            }
        }
        return false;
    }
}