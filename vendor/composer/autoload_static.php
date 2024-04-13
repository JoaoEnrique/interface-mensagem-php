<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteba48def7b74925eafd9657cd17a6057
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteba48def7b74925eafd9657cd17a6057::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteba48def7b74925eafd9657cd17a6057::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteba48def7b74925eafd9657cd17a6057::$classMap;

        }, null, ClassLoader::class);
    }
}