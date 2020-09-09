<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb37e783fdf0db839661dc36aa1d5048b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb37e783fdf0db839661dc36aa1d5048b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb37e783fdf0db839661dc36aa1d5048b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}