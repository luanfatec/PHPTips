<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite20fd3e5ba9242e86320cdfc115189cf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'CoffeeCode\\Cropper\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'CoffeeCode\\Cropper\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/cropper/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite20fd3e5ba9242e86320cdfc115189cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite20fd3e5ba9242e86320cdfc115189cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
