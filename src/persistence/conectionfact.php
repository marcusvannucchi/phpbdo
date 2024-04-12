<?php 
 namespace appp\persistence;

 class conectionfact {

   static $conection;

    public static function getconectio () {
     return self::$conection;    
    }
 }