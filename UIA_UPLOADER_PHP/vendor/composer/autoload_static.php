<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c3a6c4788f7f441e72255ca89be4305
{
    public static $files = array (
        'bedb35a03b58793c96759e7540ecdff4' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Uploader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Uploader\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/uploader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c3a6c4788f7f441e72255ca89be4305::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c3a6c4788f7f441e72255ca89be4305::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
