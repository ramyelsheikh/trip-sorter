<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05cf2c4cae36f70581a28cb2a2e6b66b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TripSorter\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TripSorter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/TripSorter',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05cf2c4cae36f70581a28cb2a2e6b66b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05cf2c4cae36f70581a28cb2a2e6b66b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
