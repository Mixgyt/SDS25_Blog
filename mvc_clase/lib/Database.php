<?php

    namespace lib;

    use PDO,PDOException;
    class Database{
        private static string $host = "db";
        private static string $name = "appdb";
        private static string $username = "root";
        private static string $password = "rootpass";

        public static function getConnection(){
            try{
                $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$name,self::$username,self::$password);
                $conn->exec("set names utf8");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch(PDOException $exception){
                echo "Error: ".$exception->getMessage();
            }
        }
    }
?>