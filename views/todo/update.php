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
echo "Im in?????????????";

// Insert data into database
$sql = "UPDATE todo_list SET todo_name=$todo_name, content=$content WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>