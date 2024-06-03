<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit758ddc4322675032fbe3da44c70794d3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuankiet\\Web3014\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuankiet\\Web3014\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit758ddc4322675032fbe3da44c70794d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit758ddc4322675032fbe3da44c70794d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit758ddc4322675032fbe3da44c70794d3::$classMap;

        }, null, ClassLoader::class);
    }
}
