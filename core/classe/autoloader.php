<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 25/11/2015
 * Time: 14:39
 */
class autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {
        require 'class/'.$class.'.php';
    }
}