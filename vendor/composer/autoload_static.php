<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb20c3c181ae7f0381f73ab813642a323
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Superlogica\\' => 12,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Superlogica\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Superlogica',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $classMap = array (
        'Superlogica\\Clientes' => __DIR__ . '/../..' . '/src/Superlogica/Clientes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb20c3c181ae7f0381f73ab813642a323::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb20c3c181ae7f0381f73ab813642a323::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb20c3c181ae7f0381f73ab813642a323::$classMap;

        }, null, ClassLoader::class);
    }
}