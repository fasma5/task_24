<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f2d40e153a3b5fc645f65c446e065f9
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f2d40e153a3b5fc645f65c446e065f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f2d40e153a3b5fc645f65c446e065f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f2d40e153a3b5fc645f65c446e065f9::$classMap;

        }, null, ClassLoader::class);
    }
}