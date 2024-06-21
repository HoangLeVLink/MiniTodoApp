<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Detail</title>
    <link rel="stylesheet" href="/views/todo/styles/styles.css">
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
                    echo '<span class="detail-label">Content:</span> ' . htmlspecialchars($row["content"]) . '<br>';
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
