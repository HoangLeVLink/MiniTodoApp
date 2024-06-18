<?php
    if (isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'list';
        }
    } else {
        die("No controller");
    }
    if ($action == 'edit' || $action == 'detail') {
        if (isset($_GET['id'])) $id = $_GET['id'];
        else die("ID needed");
    }
    else $id = NULL;
    
    include_once('routes.php');

    $_ROUTE = new Route($controller, $action, $id);
    $_ROUTE->control();
?>