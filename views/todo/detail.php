<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Detail</title>
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
        .todo-detail {
            text-align: left;
            padding: 20px;
        }
        .todo-detail .detail-item {
            margin-bottom: 10px;
        }
        .todo-detail .detail-label {
            font-weight: bold;
        }
        .no-results {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>TODO Detail</h1>
        </div>
        <div class="todo-detail">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="detail-item">';
                    echo '<span class="detail-label">ID:</span> ' . $row["id"] . '<br>';
                    echo '<span class="detail-label">Name:</span> ' . $row["todo_name"] . '<br>';
                    echo '<span class="detail-label">Content (Full):</span> ' . htmlspecialchars($row["content"]) . '<br>';
                    echo '</div>';
                }
            } else {
                echo '<div class="no-results">No TODO item found for this ID.</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
