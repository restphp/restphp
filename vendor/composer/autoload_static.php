<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97dadc49a6b1ea13f4f443baaff20502
{
    public static $files = array (
        '781eb434ef2725880802bc2d3daaaebb' => __DIR__ . '/..' . '/RestPHP/Framework/src/functions.php',
        'cbbef95603c817b1b3a2844cd3f9685a' => __DIR__ . '/..' . '/RestPHP/VORM/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VORM\\' => 5,
        ),
        'R' => 
        array (
            'RestPHP\\' => 8,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/RestPHP/VORM/src',
        ),
        'RestPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/RestPHP/Framework/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97dadc49a6b1ea13f4f443baaff20502::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97dadc49a6b1ea13f4f443baaff20502::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
