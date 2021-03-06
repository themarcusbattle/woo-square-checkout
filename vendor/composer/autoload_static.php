<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a437e26e80716031eea5e3b5ac78c25
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SquareConnect\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SquareConnect\\' => 
        array (
            0 => __DIR__ . '/..' . '/square/connect/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a437e26e80716031eea5e3b5ac78c25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a437e26e80716031eea5e3b5ac78c25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
