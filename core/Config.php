<?php

namespace Home;
class Config
{
    public static $config;

    public static function init()
    {
        self::read();

        $custom_config_file = self::$config['PATH_CONFIG'];
        if (file_exists($custom_config_file)) {
            $custom_config = require $custom_config_file;
            foreach ($custom_config as $key => $value) {
                self::$config[$key] = $value;
            }
        }
    }

    public static function get($key)
    {
        return self::$config[$key];
    }

    private static function read()
    {
        $base_url = '127.0.0.1';

        self::$config = array(

            'MAINTENANCE' => false,

            'URL' => 'http://'.$base_url.'/',
            'URL_ROOT' => 'http://'.$base_url,

            'SITE_LOCALE' => 'en_US',
            'SITE_TIMEZONE' => '+00:00',
            'SITE_NAME' => 'The Bit Twisters Home',
            'SITE_AUTHOR' => 'The Bit Twisters',
            'SITE_CAPTION' => 'A simple PHP MVC Framework - Home',
            'SITE_TITLE' => 'The Bit Twisters Home',
            'SITE_DESCRIPT' => 'A simple PHP MVC Framework - Home',
            'SITE_KEYWORDS' => 'php, home, thebittwisters, mvc, framework',
            'SITE_LOGO' => 'http:/'.$base_url.'/img/home.png',
            'SITE_PREVIEW' => 'http:/'.$base_url.'/img/home-preview.jpg',
            'SITE_TERMS' => 'http:/'.$base_url.'/about/terms/',
            'SITE_PRIVACY' => 'http:/'.$base_url.'/about/privacy/',

            'PATH_CONFIG' => realpath(dirname(__FILE__).'/../') . '/config.php',
            'PATH_APPS' => realpath(dirname(__FILE__).'/../') . '/apps/',

            'DEFAULT_APP' => 'home',
            'DEFAULT_ACTION' => 'index',

            'DB_TYPE' => 'mysql',
            'DB_HOST' => '*',
            'DB_NAME' => 'test',
            'DB_USER' => 'admin',
            'DB_PASS' => 'UndefinedPassword',
            'DB_PORT' => '3306',
            'DB_CHARSET' => 'utf8mb4',

            'COOKIE_RUNTIME' => 604800,
            'COOKIE_PATH' => '/',
            'COOKIE_DOMAIN' => $base_url,
            'COOKIE_SECURE' => true,
            'COOKIE_HTTP' => true,
            'SESSION_RUNTIME' => 604800,

            'ENCRYPTION_KEY' => 'D7gÊìcL6f$*+&C$f^1x',
            'HMAC_SALT' => '88z7nk#10q5t9c^4L6dM%',

        );
    }

    public static function print()
    {
        var_dump(self::$config);
    }

}
