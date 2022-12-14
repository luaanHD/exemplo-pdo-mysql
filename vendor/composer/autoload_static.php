<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef60b06c1e5a37ba2864b9e1da7a56bc
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitef60b06c1e5a37ba2864b9e1da7a56bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef60b06c1e5a37ba2864b9e1da7a56bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef60b06c1e5a37ba2864b9e1da7a56bc::$classMap;

        }, null, ClassLoader::class);
    }
}
