<?php
    include_once("models/todo.php");
    $_DB = new Model();

    class Controller
    {
        private $_DB;
        public function __construct($db) {
            $this->_DB = $db;
        }
        public function __destruct() {
            // Destructor
        }
        # View
        function list()
        {
            $result = $this->_DB->list();
            include_once("views/todo/list.php");
        }

        function new()
        {
            include_once("views/todo/new.php");
            if (empty($todo_name)) echo ("Awaiting ... (Todo Name required!!!)<br>");
            else $this->_DB->new($todo_name, $content);
        }
        function edit($id)
        {
            include_once("views/todo/edit.php");
            if (empty($todo_name) && empty($content)) echo ("Please make changes<br>");
            else $this->_DB->edit($id, $todo_name, $content);
        }
        function detail($id)
        {
            $result = $this->_DB->detail($id);
            include_once("views/todo/detail.php");
        }
    }
?>
