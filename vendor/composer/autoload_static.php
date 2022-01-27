<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01cf14de79790ad1b8515fd80c559483
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01cf14de79790ad1b8515fd80c559483::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01cf14de79790ad1b8515fd80c559483::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01cf14de79790ad1b8515fd80c559483::$classMap;

        }, null, ClassLoader::class);
    }
}
