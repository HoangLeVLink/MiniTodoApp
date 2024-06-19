<?php
    namespace Controllers;
    
    // this is nowhere near autoload
    function load_model($filename,$result = NULL)
    {
        $path_to_file = 'views/todo/' . $filename . '.php';

        if (file_exists($path_to_file)) {
            include_once $path_to_file;
        }
    }

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
            load_model(__FUNCTION__, $result);
            // require 'vendor/autoload.php';
        }

        function new()
        {
            load_model(__FUNCTION__);
            if (empty($todo_name)) echo ("Awaiting ... (Todo Name required!!!)<br>");
            else $this->_DB->new($todo_name, $content);
        }
        function edit($id)
        {
            load_model(__FUNCTION__);
            if (empty($todo_name) && empty($content)) echo ("Please make changes<br>");
            else $this->_DB->edit($id, $todo_name, $content);
        }
        function detail($id)
        {
            $result = $this->_DB->detail($id);
            load_model(__FUNCTION__, $result);
        }
    }
?>
