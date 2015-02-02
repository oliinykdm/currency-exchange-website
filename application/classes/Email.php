<?
Class Email {
    public static function send($message, $profile = 'default')
    {
        try {
            $config = Arr::get(Kohana::$config->load('email')->as_array(), $profile);
            $transport = Swift_SmtpTransport::newInstance($config['smtpHost'], $config['smtpPort'], $config['encryption'])
                ->setUsername($config['smtpUser'])
                ->setPassword($config['smtpPass']);
            $mailer = Swift_Mailer::newInstance($transport);
            return $mailer->send($message);
        } catch (Exception $e) {
            return 0;
        }
    }

}
