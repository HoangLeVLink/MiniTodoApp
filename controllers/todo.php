<?php
    include_once("models/todo.php");
    class Controller
    {
        private $_DB;
        public function __construct($db) {
            $this->_DB = $db;
        }
        # View
        function list()
        {
            $result = $this->_DB->list();
            include_once("views/todo/list.php");
        }

        function new()
        {
            include_once("views/todo/edit.php");
            $this->_DB->new($todo_name, $content);
        }
    }

    $_CONTROL = new Controller($_DB);

?>
