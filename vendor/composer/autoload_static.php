<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4fe6050dfde0cecb5324ed8b3a9f2eb
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BenMajor\\ImageResize\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BenMajor\\ImageResize\\' => 
        array (
            0 => __DIR__ . '/..' . '/benmajor/php-image-resize/src/BenMajor',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4fe6050dfde0cecb5324ed8b3a9f2eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4fe6050dfde0cecb5324ed8b3a9f2eb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
