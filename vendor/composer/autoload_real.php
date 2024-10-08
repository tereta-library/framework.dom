<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit85b55bfbb2c1c78ab56cc8ab146f425b
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

        spl_autoload_register(array('ComposerAutoloaderInit85b55bfbb2c1c78ab56cc8ab146f425b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit85b55bfbb2c1c78ab56cc8ab146f425b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit85b55bfbb2c1c78ab56cc8ab146f425b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
