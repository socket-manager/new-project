<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2891572939c23ecefdf182161ac48c8e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SocketManager\\Library\\Bin\\' => 26,
            'SocketManager\\Library\\' => 22,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SocketManager\\Library\\Bin\\' => 
        array (
            0 => __DIR__ . '/..' . '/socket-manager/library/bin',
        ),
        'SocketManager\\Library\\' => 
        array (
            0 => __DIR__ . '/..' . '/socket-manager/library/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2891572939c23ecefdf182161ac48c8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2891572939c23ecefdf182161ac48c8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2891572939c23ecefdf182161ac48c8e::$classMap;

        }, null, ClassLoader::class);
    }
}
