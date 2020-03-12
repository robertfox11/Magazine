<?php
class Database{
    
        public static function connect(){
            $db = new mysqli('localhost:3308', 'root', '', 'databasemagazine');
            $db->query("SET NAMES 'utf8'");
            if ($db->connect_errno) {
                printf("connectar failed", $db->connect_error);
                return $db;
            }
            var_dump($db);
            return $db;
        }
}
?>