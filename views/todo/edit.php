<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <link rel="stylesheet" href="/views/todo/styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h2>Update Existing Todo</h2>
        </div>
        <div class="form-body">
            <form action="/todo/update/<?php echo $id; ?>" method="post">
                <label for="todo_name">Todo Name:</label><br>
                <input type="text" id="todo_name" name="todo_name"><br><br>
                <label for="content">Content:</label><br>
                <input type="text" id="content" name="content"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
