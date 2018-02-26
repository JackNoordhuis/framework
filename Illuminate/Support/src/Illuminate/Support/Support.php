<?php

namespace Illuminate\Support;

/**
 * Class to bootstrap the support library when the composer autoloader isn't used
 */
class Support
{

    /** @var bool */
    private static $initialized = false;

    /**
     * Load the helpers file into the autoloader to define the
     * constants and functions in the global namespace
     */
    public static function init()
    {
        if(!static::$initialized) {
            if(file_exists($file = __DIR__ . DIRECTORY_SEPARATOR . "helpers.php")) {
                require_once $file;
            }
        }
    }

}