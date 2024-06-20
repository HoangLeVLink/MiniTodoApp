<?php
    namespace Controllers;
    
    class Todo
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
            $this->show($result, __FUNCTION__);
        }
        function show($result, $caller)
        {
            include_once "views/todo/$caller.php"; 
        }
        function new()
        {
            include_once "views/todo/new.php";
        }
        function create()
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $todo_name = $_POST['todo_name'];
                $content = $_POST['content'];
            }
            $this->_DB->new($todo_name, $content);
            header("Location: list");
        }
        function edit($id)
        {
            include_once "views/todo/edit.php";
        }
        function update($id)
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $todo_name = $_POST['todo_name'];
                $content = $_POST['content'];
            }
            $this->_DB->edit($id, $todo_name, $content);
            header("Location: /todo/list");
        }
        function detail($id)
        {
            $result = $this->_DB->detail($id);
            $this->show($result, __FUNCTION__);
        }
        function delete($id)
        {
            $result = $this->_DB->delete($id);
            header("Location: /todo/list");
        }
    }
?>
