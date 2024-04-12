<?php 
 namespace app\persistence;

 class conectionfact {

  static $dbuser = "root";

  static $dbpassword = "";

  static $dbname = "estudantes";

  static $dbhost = "localhost";

  static $dbport = "3306";

      private static $connectionInstance;
 
        public static function getconectio(){
            $strConn = "mysql:host=".self::$dbhost.";dbname=".self::$dbname;
            try{
            self::$connectionInstance = new \PDO($strConn, self::$dbuser, self::$dbpassword);
            self::$connectionInstance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch(\PDOException $e){
                echo print_r($e, true);
            }
 
            return self::$connectionInstance;
        }
 }