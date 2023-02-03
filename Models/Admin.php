<?php
    require_once('Config/Database.php');

    class Admin{
        private $id;
        private $username;
        private $password;
        private $db;


    
        public function __construct(){
            $this->db = Database::connect();
        }

        public function getId() {
            return $this->id;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getDb() {
            return $this->db;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function setUsername($username): void {
            $this->username = $username;
        }

        public function setPassword($password): void {
            $this->password = password_hash($password,PASSWORD_BCRYPT,['cost' => 4]);
        }

        public function setDb($db): void {
            $this->db = $db;
        }

        public function login($username,$password){
            $result = false;
            

            //Comprobar si existe el usuario
            $sql = "SELECT id,username,password FROM admins WHERE username = '$username'";
            $login = $this->db->query($sql);

            

            if ($login && $login->num_rows == 1) {
                $user = $login->fetch_object();

              
               
                
                $verify = password_verify($password, $user->password);

                if ($verify) {
                    $result = $user;
                }
                      


            }
            return $result;            

        }
    }   


?>