<?php
    class Database{
        public function connect(){
            $db = new mysqli('localhost', 'root', '', 'asistbox');
            $db->query("SET NAMES UTF8");

            return $db;
        }
    }


?>