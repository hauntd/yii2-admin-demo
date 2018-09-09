<?php

/**
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function env($key, $default = false) {

    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;

        case 'false':
        case '(false)':
            return false;
    }

    return $value;
}

/**
 * Load application environment from .env file
 */
$dotEnv = new \Dotenv\Dotenv(dirname(__FILE__), '.env');
$dotEnv->load();

/**
 * Init application constants
 */
defined('YII_DEBUG') or define('YII_DEBUG', env('APP_DEBUG', true));
defined('YII_ENV') or define('YII_ENV', env('APP_ENV', 'dev'));
