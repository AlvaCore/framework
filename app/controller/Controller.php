<?php

global $url;

abstract class Controller
{

    public function db()
    {
        try {
            
        $db = new PDO('mysql:host=' . env('DB_HOST') . ';charset=utf8;dbname=' . env('DB_NAME'), env('DB_USER'), env('DB_PASS'));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
        
        } catch (Exception $e) {
            
        }
    }
    public function nl2br2($string)
    {
        $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
        return $string;
    }

    public function setCookie($name, $variable, $time = '777600', $path = '/', $domain = null, $secure = 0)
    {
        setcookie($name, $variable,time()+$time, $path, $domain, $secure);
    }

}