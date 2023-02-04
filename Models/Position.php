<?php
    require_once('Config/Database.php');

    class Position{
        private $id;
        private $position;
        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }

        public function getId() {
            return $this->id;
        }

        public function getPosition() {
            return $this->position;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function setPosition($position): void {
            $this->position = $position;
        }



        public function addPosition($position){
            $sql = "INSERT INTO positions VALUES(NULL,'$position');";
            $save = $this->db->query($sql);

            return true;
        }


    }


?>