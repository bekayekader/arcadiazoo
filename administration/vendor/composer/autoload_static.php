<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit729457f97486b4bcb34d1f787b737669
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'F1\\Treso\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'F1\\Treso\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit729457f97486b4bcb34d1f787b737669::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit729457f97486b4bcb34d1f787b737669::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit729457f97486b4bcb34d1f787b737669::$classMap;

        }, null, ClassLoader::class);
    }
}