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
            $modelName = 'Models\\' . $this->controller;
            $_DB = new $modelName();
            $ctrlerName = 'Controllers\\' . $this->controller;
            $_CONTROL = new $ctrlerName($_DB);
            $actionMethod = $this->action;
            isset($this->id) ? $_CONTROL->$actionMethod($this->id) : $_CONTROL->$actionMethod();
        }
    }
?>