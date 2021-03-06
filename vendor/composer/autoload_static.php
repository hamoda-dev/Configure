<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a580bec9e5111fe01bf498948d7be28
{
    public static $files = array (
        'a75ff88afd9a512d826cda18ada4aa31' => __DIR__ . '/../..' . '/Configure/configureFunction.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Configure\\Core\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Configure\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Configure/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a580bec9e5111fe01bf498948d7be28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a580bec9e5111fe01bf498948d7be28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a580bec9e5111fe01bf498948d7be28::$classMap;

        }, null, ClassLoader::class);
    }
}
