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

            'URL' => 'http://'.$base_url,
            'URL_ROOT' => 'http://'.$base_url.'/',
            'URL_PLUGINS' => 'http://'.$base_url.'/plugins',

            'SITE_LOCALE' => 'en_US',
            'SITE_TIMEZONE' => '+00:00',
            'SITE_TITLE' => 'The Bit Twisters Home',
            'SITE_AUTHOR' => 'The Bit Twisters',
            'SITE_CAPTION' => 'A simple PHP MVC Framework - Home',
            'SITE_DESCRIPT' => 'A simple PHP MVC Framework - Home',
            'SITE_KEYWORDS' => 'php, home, thebittwisters, mvc, framework',
            'SITE_LOGO' => '/img/home.png',
            'SITE_ICON' => '/ico/favicon.ico',
            'SITE_PREVIEW' => '/img/home-preview.jpg',
            'SITE_TERMS' => '/about/terms/',
            'SITE_PRIVACY' => '/about/privacy/',

            'PATH_CONFIG' => realpath(dirname(__FILE__).'/../') . '/config.php',
            'PATH_APPS' => realpath(dirname(__FILE__).'/../') . '/apps/',

            'DEFAULT_APP' => 'home',
            'DEFAULT_ACTION' => 'index',

            'CSRF_VALIDITY' => 3600,

            'LOGIN_URL' => '/login',
            'LOGIN_REDIRECT_URL' => '/admin',
            'LOGIN_CHECK_SESSION' => true,
            'LOGIN_FAILED_COUNTS' => 3,
            'LOGIN_RETRY_TIME' => 60,

            'DB_TYPE' => 'mysql',
            'DB_HOST' => '*',
            'DB_NAME' => 'test',
            'DB_USER' => 'root',
            'DB_PASS' => '',
            'DB_PORT' => '3306',
            'DB_CHARSET' => 'utf8mb4',

            'COOKIE_RUNTIME' => 604800,
            'COOKIE_PATH' => '/',
            'COOKIE_DOMAIN' => '',
            'COOKIE_SECURE' => true,
            'COOKIE_HTTP' => true,
            'SESSION_RUNTIME' => 604800,

            'IMAGE_LOGO_WIDTH' => 360,
            'IMAGE_LOGO_HEIGHT' => 360,
            'IMAGE_MAXWIDTH' => 1280,
            'IMAGE_MAXHEIGHT' => 720,

        );
    }

    public static function print()
    {
        var_dump(self::$config);
    }

}
