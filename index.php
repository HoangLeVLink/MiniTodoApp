<?php
    if (isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'edit' || $action == 'detail') {
                if (isset($_GET['id'])) $id = $_GET['id'];
                else die("ID needed");
            }
        } else {
            $action = 'list';
        }
    } else {
        die("No controller");
    }
    
    require_once('routes.php');
?>