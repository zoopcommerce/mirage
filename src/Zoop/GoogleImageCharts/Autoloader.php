<?php

namespace Zoop\GoogleImageCharts;

/**
 * Autoloads GoogleImageCharts classes.
 *
 * @author Josh Stuart <josh.stuart@zoopcommerce.com>
 */
class Autoloader {

    /**
     * Registers an SPL autoloader.
     */
    public static function register() {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array(new self, 'autoload'));
    }

    /**
     * Handles autoloading of classes.
     *
     * @param string $class A class name.
     */
    public static function autoload($class) {
        if (0 !== strpos($class, 'GoogleImageCharts')) {
            return;
        }
        die(var_dump($class));
        if (is_file($file = dirname(__FILE__) . '/../' . str_replace(array('_', "\0"), array('/', ''), $class) . '.php')) {
            require_once $file;
        }
    }

}
