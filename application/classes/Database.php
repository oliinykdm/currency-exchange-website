<?php

class Database
{
    public static function init()
    {
        $config = Kohana::$config->load('database');
        $serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
        foreach ($config as $profile => $settings) {
            $serviceContainer->setAdapterClass($profile, 'mysql');
            $manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
            $manager->setConfiguration(array(
                'dsn' => 'mysql:host=' . $settings['hostname'] . ';dbname=' . $settings['database'],
                'user' => $settings['username'],
                'password' => $settings['password'],
            ));
            $serviceContainer->setConnectionManager($profile, $manager);
        }
        $pdo = self::getConnection();
        $pdo->query("SET NAMES 'utf8'");
    }

    /**
     *
     * @return PDO
     */
    public static function getConnection()
    {
        return \Propel\Runtime\Propel::getConnection('obmennik')->getWrappedConnection();
    }

}
