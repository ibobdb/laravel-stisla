<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c6c751069c61529748f66fd53485e8e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ibobdb\\LaravelStisla\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ibobdb\\LaravelStisla\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c6c751069c61529748f66fd53485e8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c6c751069c61529748f66fd53485e8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c6c751069c61529748f66fd53485e8e::$classMap;

        }, null, ClassLoader::class);
    }
}
