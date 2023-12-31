<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit264cc9f56eca749390cc290fda97d315
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProgrammerZamanNow\\' => 19,
        ),
        'C' => 
        array (
            'ClassModel\\' => 11,
            'ClassController\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProgrammerZamanNow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'ClassModel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
        'ClassController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit264cc9f56eca749390cc290fda97d315::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit264cc9f56eca749390cc290fda97d315::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit264cc9f56eca749390cc290fda97d315::$classMap;

        }, null, ClassLoader::class);
    }
}
