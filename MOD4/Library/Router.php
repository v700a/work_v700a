<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 05.02.2017
 * Time: 12:01
 */

namespace Library;


abstract class Router
{
    static function redirect ($goto)
    {
        header("location: . $goto");
        die;
    }
}