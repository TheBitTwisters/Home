<?php

$base_url = 'test.kpoparazzi.com';

/**
 * Returns the full configuration.
 * This is used by the core/Config class.
 */
 return array(

     //
     'MAINTENANCE' => false,

 	// URL
     'URL' => 'https://'.$base_url.'/',
     'URL_ROOT' => 'https://'.$base_url,

     // META
     'SITE_LOCALE' => 'en_US',
     'SITE_NAME' => 'KPOParazzi.com',
     'SITE_AUTHOR' => 'The Bit Twisters',
     'SITE_CAPTION' => 'KPOParazzi.com - Community for the KPOP &amp; KDRAMA fans',
     'SITE_TITLE' => 'KPOParazzi.com',
     'SITE_DESCRIPT' => 'Community for the KPOP &amp; KDRAMA fans',
     'SITE_KEYWORDS' => 'kpop, korea, kdrama, kpoparazzi, latest, news, quiz, fun, interactive, k, gossip, story',
     'SITE_LOGO' => 'https://'.$base_url.'/img/kpoparazzi.png',
     'SITE_PREVIEW' => 'https://'.$base_url.'/img/k-preview.jpg',
     'SITE_TERMS' => 'https://'.$base_url.'/about/terms/',
     'SITE_PRIVACY' => 'https://'.$base_url.'/about/privacy/',

     // PATH
     'PATH_MODEL' => realpath(dirname(__FILE__).'/../../') . '/application/model/',
     'PATH_VIEW' => realpath(dirname(__FILE__).'/../../') . '/application/view/',
     'PATH_CONTROLLER' => realpath(dirname(__FILE__).'/../../') . '/application/controller/',
     'PATH_FILES' => realpath(dirname(__FILE__).'/../../') . '/public/',
     'PATH_AVATAR' => realpath(dirname(__FILE__).'/../../') . '/public/avatar/',
     'PATH_ERROR_LOG' => realpath(dirname(__FILE__).'/../../../') . '/logs/error_www_php.log',
     'PATH_BACKDROP' => realpath(dirname(__FILE__).'/../../') . '/public/img/backdrop/',
     'PATH_FONTS' => realpath(dirname(__FILE__).'/../../') . '/public/fonts/',

     // APP & ACTN
     'DEFAULT_APP' => 'home',
     'DEFAULT_ACTION' => 'index',

     // DB
     'DB_TYPE' => 'mysql',
     'DB_HOST' => '*',
     'DB_NAME' => 'test',
     'DB_USER' => 'admin',
     'DB_PASS' => 'UndefinedPassword',
     'DB_PORT' => '3306',
     'DB_CHARSET' => 'utf8mb4',

     // COOKIE
     'COOKIE_RUNTIME' => 604800,
     'COOKIE_PATH' => '/',
     'COOKIE_DOMAIN' => $base_url,
     'COOKIE_SECURE' => true,
     'COOKIE_HTTP' => true,
     'SESSION_RUNTIME' => 604800,

     // ENCRYPTION
     'ENCRYPTION_KEY' => 'D7gÊìcL6f$*+&C$f^1x',
     'HMAC_SALT' => '88z7nk#10q5t9c^4L6dM%',

 );


?>
