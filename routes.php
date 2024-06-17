<?php
    // include_once("./db/connection.php");
    include_once("controllers/todo.php");

    if ($action == 'edit' || $action == 'detail') $_CONTROL->$action($id);
    else $_CONTROL->$action();
?>