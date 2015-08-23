<?php

/**
 * Cookie class
 *
 * handles the cookies stuff.
 */
class Cookie
{
    /**
     * sets a cookie
     */
    public static function set($key, $value)
    {
        setcookie($key, $value, time() + Config::get('COOKIE_RUNTIME'), Config::get('COOKIE_PATH'), $_SERVER['HTTP_HOST'], false, true);
    }

    /**
     * gets/returns the value of a specific key of a cookie
     */
    public static function get($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        
        return false;
    }

    /**
     * deletes a cookie
     */
    public static function delete($key)
    {
        setcookie($key, false, time() - (3600 * 24 * 3650), Config::get('COOKIE_PATH'));
    }
}
