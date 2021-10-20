<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fd112fa2597838d8d8fc04ae6c36f7d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fd112fa2597838d8d8fc04ae6c36f7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fd112fa2597838d8d8fc04ae6c36f7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fd112fa2597838d8d8fc04ae6c36f7d::$classMap;

        }, null, ClassLoader::class);
    }
}
