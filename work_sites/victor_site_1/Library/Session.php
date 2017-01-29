<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24.01.2017
 * Time: 6:30
 */

namespace Library;


abstract class Session
{

    const MESSAGE_KEY = 'message';

    static function sessionStart ()
    {
        session_start();
    }

    static function get($key)
    {
        if (self::has($key)):
            if (self::has($key) !== '' && self::has($key) !== 0 && self::has($key) !== null):
                return $_SESSION[$key];
            endif;
        endif;
        return null;
    }

    static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    static function remove ($key)
    {
        if (self::has($key)):
            unset($_SESSION[$key]);
        endif;
    }

    static function setContent ($key, $content)
    {

            self::set($key, $content);

    }

    static function getContent ($key = null)
    {
        $content = self::get($key);
//        self::remove($key);
        return $content;
    }

    static function setMessage ($message)
    {

            self::set(self::MESSAGE_KEY, $message);

    }
    static function getMessage ()
    {
            $message = self::get(self::MESSAGE_KEY);
            self::remove(self::MESSAGE_KEY);
            return $message;
    }

}