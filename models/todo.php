<?php
class Model
{
    private $conn;
    
    # Constructor -> Connect Database
    function __construct () {
        include_once("db/connection.php");
        $this->conn = $conn;
    }
    # Destructor -> Close connection
    function __destruct () {
        $this->conn->close();
        // echo "Connection closed.<br>";
    }
    # Retrieve full table
    function list () {
        $sql = "SELECT id, todo_name FROM todo_list";
        return $this->conn->query($sql);
    }
    # Insert new data
    function new ($todo_name, $content) {
        $sql = "INSERT INTO todo_list (todo_name, content) VALUES ('$todo_name', '$content')";

        if ($this->conn->query($sql) === TRUE) {
            // echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
        }
    }
    # Edit data
    function edit ($id, $todo_name, $content) {
        $t = empty($todo_name) ? "" : "todo_name='$todo_name'";
        $c = empty($content) ? "" : "content='$content'";
        if ($t != "" && $c != "") $add = $t . "," . $c;
        else $add = $t . $c;

        $sql = "UPDATE todo_list SET $add WHERE id=$id";
        
        if ($this->conn->query($sql) === TRUE) {
            // echo "Record updated successfully<br>";
        } else {
            echo "Error updating record: " . $conn->error . "<br>";
        }
    }
    # See detail
    function detail ($id) {
        $sql = "SELECT id,todo_name,content FROM todo_list WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>