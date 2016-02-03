<?php


class Singleton
{

    static private $instance = null;


    private function __construct()
    {
        echo("Creating new Singleton");
    }

    static function GetInstance()
    {

        if (Singleton::$instance === null) {
            Singleton::$instance = new Singleton();
        }
        return Singleton::$instance;
    }
}