<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e032968f3defd6260d581192c2fc551
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e032968f3defd6260d581192c2fc551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e032968f3defd6260d581192c2fc551::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e032968f3defd6260d581192c2fc551::$classMap;

        }, null, ClassLoader::class);
    }
}
