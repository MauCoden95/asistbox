<?php
  
    require_once('Models/Position.php');

    class PositionController{
        public function index(){
            require_once('Views/Position/Position.php');
        }


        public function add(){
            if ($_POST) {
                
                $post = $_POST['position'];

                $position = new Position();
                

                $save = $position->addPosition($_POST['position']);
                if ($save) {
                    $_SESSION['add_position'] = true;
                }else{
                    $_SESSION['add_position'] = false;
                }

            }

            header('Location: http://localhost/AsistBox/Position/index');
        }
    }




?>