<?php
namespace Models;

class Doto
{
    private $conn;
    
    # Constructor -> Connect Database
    function __construct () {
        include_once("db/connection.php");
        $this->conn = $conn;
        echo "Connected successfully.<br>";
    }
    # Destructor -> Close connection
    function __destruct () {
        $this->conn->close();
        echo "Connection closed.<br>";
    }
    function speak()
    {
        echo "DOTO also connects DB.<br>";
    }
}
?>