<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita6ae5714855e77d9ffa96ae3e6434c25
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita6ae5714855e77d9ffa96ae3e6434c25', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita6ae5714855e77d9ffa96ae3e6434c25', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita6ae5714855e77d9ffa96ae3e6434c25::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
