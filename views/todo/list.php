<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .todo-item {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        .todo-item:last-child {
            border-bottom: none;
        }
        .todo-item .todo-id {
            font-weight: bold;
        }
        .todo-item .todo-name {
            margin-left: 10px;
        }
        .no-results {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>TODO List</h1>
        </div>
        <div class="todo-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="todo-item">';
                    echo '<span class="todo-id">ID: ' . $row["id"] . '</span>';
                    echo '<span class="todo-name">- Name: ' . htmlspecialchars($row["todo_name"]) . '</span>';
                    echo '</div>';
                }
            } else {
                echo '<div class="no-results">No TODO items found.</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
