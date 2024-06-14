<?php
// Database connection
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

// Prepare data for insertion
$todo_name = $_POST['todo_name'];
$content = $_POST['content'];

// Insert data into database
$sql = "INSERT INTO todo_list (todo_name, content) VALUES ('$todo_name', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>