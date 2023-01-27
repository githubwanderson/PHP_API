<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6dfac1105e5695063f48ed2482d2c677
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wanderson\\Api\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wanderson\\Api\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6dfac1105e5695063f48ed2482d2c677::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6dfac1105e5695063f48ed2482d2c677::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6dfac1105e5695063f48ed2482d2c677::$classMap;

        }, null, ClassLoader::class);
    }
}