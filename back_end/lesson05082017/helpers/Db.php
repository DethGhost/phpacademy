<?php

/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 05.08.2017
 * Time: 12:59
 */
final class Db
{

    private static $instance;

    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance(){

        if(!self::$instance){
            self::$instance = new mysqli(
                'localhost',
                'root',
                'root',
                'comments'
            );
        }
        if(self::$instance->connect_error){
            throw new Exception("DB connect ERROR");
        }
        return self::$instance;
    }


}