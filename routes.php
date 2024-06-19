<?php
    use Controllers\Todo as Controller;
    use Models\Todo as Model;
    
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
            $_DB = new Model();
            $_CONTROL = new Controller($_DB);
            $actionMethod = $this->action;
            isset($this->id) ? $_CONTROL->$actionMethod($this->id) : $_CONTROL->$actionMethod();
        }
    }
?>