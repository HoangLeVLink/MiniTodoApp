<?php
    if (isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
        // echo "controller ".$controller."\n";
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'edit') {
                if (isset($_GET['id'])) $id = $_GET['id'];
                else die("ID needed");
            }
        } else {
            $action = 'list';
        }
        // echo "action ".$action;
    } else {
        die("No controller");
    }

    require_once('routes.php');
?>