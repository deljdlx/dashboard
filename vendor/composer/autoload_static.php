<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4e87ed5ec34e2613e6f6bb88943a27d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPComponent\\' => 13,
        ),
        'E' => 
        array (
            'Elbiniou\\Dashboard\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPComponent\\' => 
        array (
            0 => __DIR__ . '/..' . '/elbiniou-phpcomponent/source/class',
        ),
        'Elbiniou\\Dashboard\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source/class',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/elbiniou-phpcomponent/vendor/mustache/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4e87ed5ec34e2613e6f6bb88943a27d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4e87ed5ec34e2613e6f6bb88943a27d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite4e87ed5ec34e2613e6f6bb88943a27d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
