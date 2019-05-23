<?php

/*
|--------------------------------------------------------------------------
| Sample config file
|--------------------------------------------------------------------------
|
| Usage: rename this file to config.php
|
| \Home\Config class will read the returned array
| and update the corresponding key value.
|
*/

$base_url = 'example.com';

return array(

    'URL' => 'https://'.$base_url.'/',
    'URL_ROOT' => 'https://'.$base_url,
    'URL_PLUGINS' => 'https://'.$base_url.'/plugins/',

    'SITE_LOCALE' => 'en_US',
    'SITE_TIMEZONE' => '+00:00',
    'SITE_NAME' => 'Example.com',
    'SITE_AUTHOR' => 'The Bit Twisters',
    'SITE_CAPTION' => 'Simple PHP MVC Framework',
    'SITE_TITLE' => 'HOME',
    'SITE_DESCRIPT' => 'Simple PHP MVC Framework',
    'SITE_KEYWORDS' => 'php, home, mvc, framework',
    'SITE_LOGO' => 'http:/'.$base_url.'/img/home.png',
    'SITE_PREVIEW' => 'http:/'.$base_url.'/img/preview.jpg',
    'SITE_TERMS' => 'http:/'.$base_url.'/home/terms/',
    'SITE_PRIVACY' => 'http:/'.$base_url.'/home/privacy/',

    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'homedb',
    'DB_USER' => 'root',
    'DB_PASS' => '',
    'DB_PORT' => '3306',
    'DB_CHARSET' => 'utf8mb4',

    'COOKIE_DOMAIN' => $base_url,

    'SNS_FACEBOOK' => 'https://facebook.com/example',
    'SNS_INSTAGRAM' => 'https://instagram.com/example/',
    'SNS_YOUTUBE' => 'https://youtube.com/channel/example',

);
