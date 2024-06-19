<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully.<br>";

$tableExistsQuery = "SHOW TABLES LIKE 'todo_list'";
$tableExistsResult = $conn->query($tableExistsQuery);
if ($tableExistsResult->num_rows == 0) {
    // Table does not exist, create it
    $sql = "CREATE TABLE todo_list (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    todo_name VARCHAR(30) NOT NULL,
    content VARCHAR(30)
    )";
    if ($conn->query($sql) === TRUE) {
        // echo "Table todo_list created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
} else {
    // echo "Table todo_list already exists, skipping creation.<br>";
}
?>