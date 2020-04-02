<?php

class Database {
    public static $connection = null;

    public function __construct()
    {
        if(self::$connection){
            return self::$connection;
        }
        $this->connect();
        return self::$connection;
    }

    public function connect() {
        $serverName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "ajax1_sql";

        self::$connection = new mysqli($serverName,$username,$password,$dbName);
        if(self::$connection->connect_error) {
            die("không thể kết nối đến csdl");
        }
    }
    public function disconnect() {
        if(self::$connection) {
            self::$connection->close();
        }
    }
}