<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="/views/todo/styles/styles.css">
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
                    echo '<div class="todo-buttons">';
                    echo '<button class="btn-edit" name="edit" value="'.$row["id"].'" onclick="clicked(this)">Edit</button>';
                    echo '<button class="btn-detail" name="detail" value="'.$row["id"].'" onclick="clicked(this)">Detail</button>';
                    echo '<button class="btn-delete" name="delete" value="'.$row["id"].'" onclick="clicked(this)">Delete</button></div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="no-results">No TODO items found.</div>';
            }
            ?>
        </div>
        <button class="btn-new" name="new" onclick="clicked(this)">New</button>
    </div>
    <script>
        function clicked(button) {
            action = button.name.toString();
            id = button.value.toString();
            url = 'http://localhost/todo/'+action+'/'+id;
            window.location.href = url;
        }
    </script>
</body>
</html>
