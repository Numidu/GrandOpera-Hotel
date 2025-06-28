<?php
    class Database{
        public static $connction;

        public static function setUpConnection(){
              if(!isset(Database::$connction)){
                Database::$connction= new mysqli('localhost','root','','hotelmangement');
              }
        }

        public static function iud($q){
            Database::setUpConnection();
            Database::$connction->query($q);
           
        }

        public static function search($q){
            Database::setUpConnection();
           $result= Database::$connction->query($q);
           return $result;
        }

    }


?>

