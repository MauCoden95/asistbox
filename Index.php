<?php
    session_start();
   
    require_once('./Config/Parameters.php');
    require_once('./Autoload.php');
    

  

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'].'Controller';

        if ($controller && class_exists($controller)) {
            $main = new $controller();
    
            if ($_GET['action'] && method_exists($controller,$_GET['action'])) {
                $action = $_GET['action'];
                $main->$action();
                
            }
        }
    }else{
        $controller = new DefaultController();
        $controller->index();
    }


    

?>