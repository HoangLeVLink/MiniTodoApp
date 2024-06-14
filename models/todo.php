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
    }
    # Retrieve full table
    function list () {
        $sql = "SELECT id, todo_name, content FROM todo_list";
        $result = $this->conn->query($sql);

        // if ($result->num_rows > 0) {
        // // Output data of each row
        // while($row = $result->fetch_assoc()) {
        //     echo "id: " . $row["id"]. " - Name: " . $row["todo_name"]. " " . $row["content"]. "<br>";
        // }
        // } else {
        //     echo "0 results";
        // }

        return $result;
    }
    # Insert new data
    function new ($todo_name, $content) {
        $sql = "INSERT INTO todo_list (todo_name, content) VALUES ('$todo_name', '$content')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    # Edit data
    function edit ($id, $todo_name, $content) {
        $sql = "UPDATE todo_list SET todo_name=$todo_name, content=$content WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }
    }
    # See detail
    function detail ($id) {
        $sql = "SELECT content FROM todo_list WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["content"]. "<br>";
        }
        } else {
            echo "0 results";
        }
    }
}

$_DB = new Model();

?>