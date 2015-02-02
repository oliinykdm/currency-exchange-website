<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf34e1088480af2e7d1a74e34a0562f6d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf34e1088480af2e7d1a74e34a0562f6d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitf34e1088480af2e7d1a74e34a0562f6d', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
            composerRequiref34e1088480af2e7d1a74e34a0562f6d($file);
        }

        return $loader;
    }
}

function composerRequiref34e1088480af2e7d1a74e34a0562f6d($file)
{
    require $file;
}
