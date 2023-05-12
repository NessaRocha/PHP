<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36270b1b41258a21adc9d98036f9aa34
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Variables\\DotEnv\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Variables\\DotEnv\\' => 
        array (
            0 => __DIR__ . '/..' . '/variables/dot-env/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36270b1b41258a21adc9d98036f9aa34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36270b1b41258a21adc9d98036f9aa34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36270b1b41258a21adc9d98036f9aa34::$classMap;

        }, null, ClassLoader::class);
    }
}
