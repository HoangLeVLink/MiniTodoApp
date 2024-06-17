<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>
</head>
<body>
    <h2>Update existing Todo</h2>
    <form action="" method="post">
        <label for="todo_name">Todo Name:</label><br>
        <input type="text" id="todo_name" name="todo_name"><br>
        <label for="content">Content:</label><br>
        <input type="text" id="content" name="content"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $todo_name = $_POST['todo_name'];
        $content = $_POST['content'];
    }
    ?>

</body>
</html>
