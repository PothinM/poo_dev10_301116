<?php

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 29/11/16
 * Time: 11:20
 */
namespace Core;

class database
{
    private static $class;
    //public static $maVariable = 'BIBI';
    private static $connection = null;


    /*public function __construct($class)
    {
        $this->class = $class;
    }*/

    public function getConnection($class){
        //$this->class = $class;
        self::$class = $class;

        if(is_null(self::$connection)){
            self::$connection = new self::$class("mysql:host=localhost;dbname=aston;","root","paris");
            //print('singleton called');
        }
        //return new self::$class("mysql:host=localhost;dbname=aston;","root","paris");
        return self::$connection;
    }
}