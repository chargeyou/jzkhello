<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7215fdefd8f42ce02cc2b868029c3e71
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'worldyouhello\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'worldyouhello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7215fdefd8f42ce02cc2b868029c3e71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7215fdefd8f42ce02cc2b868029c3e71::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
