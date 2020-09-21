<?php
/*
 * PHP DotEnv for Yii2 framework
 *
 * Autoload .env at Composer autoloader.
 */
use masihfathi\dotenv\Loader;

/*
 * Prevent duplicate definition of the same name function.
 */
if ( ! function_exists('env')) {
    /**
     * Get a value from environment variable.
     *
     * @param string $name
     * @param bool   $default
     * @return array|bool|false|string
     */
    function env(string $name, bool $default = false)
    {
        static $loaded = null;
        if ($loaded === null) {
            /**
             * If the constant DISABLE_DOTENV_LOAD is defined as true, any .env
             * files is not loaded.
             *
             * if (YII_ENV == 'prod') {
             *     define('DISABLE_DOTENV_LOAD', true)
             * }
             */
            if (defined('DISABLE_DOTENV_LOAD') && DISABLE_DOTENV_LOAD) {
                $loaded = false;
            } else {
                $loaded = Loader::load(
                    defined('DOTENV_PATH') ? DOTENV_PATH : '',
                    defined('DOTENV_FILE') ? DOTENV_FILE : ''
                );
            }
        }
        if($loaded) {
            $value = $_ENV[$name];
        }
        return isset($value) ? $value : $default;
    }
}