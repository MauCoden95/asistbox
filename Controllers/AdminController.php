<?php
  
    require_once('Models/Admin.php');
    class AdminController{
        public function login(){
            require_once('Views/Admin/Login.php');
        }

        public function loginAdmin(){
            if($_POST){
                $admin = new Admin();
                $admin->setUsername($_POST['username']);
                $admin->setPassword($_POST['password']);
                $identity = $admin->login($_POST['username'],$_POST['password']);

               

                if ($identity) {
                    $_SESSION['identity'] = $identity;
                    unset($_SESSION['error_login']);

                    
                    header('Location: http://localhost/AsistBox/Default/Home');
                }else{
                    header('Location: http://localhost/AsistBox/Admin/login');
                    $_SESSION['error_login'] = true;
                }

                
            }

             
        }

        public function logout(){
            unset($_SESSION['identity']);
            header('Location: http://localhost/AsistBox/Admin/login');
        }
    }




?>