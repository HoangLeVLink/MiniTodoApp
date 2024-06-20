<?php
    namespace Controllers;
    
    class Doto //Another Controller for testing purpose
    {
        private $_DB;
        public function __construct($db) {
            $this->_DB = $db;
        }
        public function __destruct() {
            // Destructor
        }
        # View
        function speak()
        {
            echo "I am DOTO Controller.<br>";
            $this->goDB();
        }
        function goDB()
        {
            $this->_DB->speak();
        }
    }
?>
