<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf14688ff4bb445f78f0764d453c1266
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf14688ff4bb445f78f0764d453c1266::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf14688ff4bb445f78f0764d453c1266::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf14688ff4bb445f78f0764d453c1266::$classMap;

        }, null, ClassLoader::class);
    }
}
