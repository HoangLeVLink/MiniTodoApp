<?php
    class Route 
    {
        private $controller;
        private $action;
        private $id;

        public function __construct ($controller, $action, $id)
        {
            $this->controller = $controller;
            $this->action = $action;
            $this->id = $id;
        }
        public function __destruct ()
        {
            // Destructor
        }
        function control ()
        {
            include_once("controllers/$this->controller.php");
            $_CONTROL = new Controller($_DB);
            $actionMethod = $this->action;
            if ($this->action == 'edit' || $this->action == 'detail') $_CONTROL->$actionMethod($this->id);
            else $_CONTROL->$actionMethod();
        }
    }
?>