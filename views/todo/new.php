<!DOCTYPE html>
<html>
<head>
    <title>New Todo</title>
</head>
<body>
    <h2>Add a New Todo</h2>
    <form action="<?php
    echo htmlspecialchars($_SERVER['PHP_SELF']);
    $todo_name = $_POST['todo_name'];
    $content = $_POST['content'];
    ?>" method="post">
        <label for="todo_name">Todo Name:</label><br>
        <input type="text" id="todo_name" name="todo_name"><br>
        <label for="content">Content:</label><br>
        <input type="text" id="content" name="content"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
