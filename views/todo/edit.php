<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
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
        .form-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .form-body {
            text-align: left;
            padding: 20px;
        }
        .form-body label {
            font-weight: bold;
        }
        .form-body input[type="text"] {
            width: calc(100% - 20px); /* Adjust width as needed */
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-body input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-body input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-feedback {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h2>Update Existing Todo</h2>
        </div>
        <div class="form-body">
            <form action="" method="post">
                <label for="todo_name">Todo Name:</label><br>
                <input type="text" id="todo_name" name="todo_name"><br><br>
                <label for="content">Content:</label><br>
                <input type="text" id="content" name="content"><br><br>
                <input type="submit" value="Submit">
            </form>

            <?php
            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $todo_name = $_POST['todo_name'];
                $content = $_POST['content'];

                // Validate input (optional)
                // For demonstration, assume form is valid

                // Process the form (for example, update database)
                // Here, you might want to call your database method to update data
                // For demonstration, we will just show a success message
                echo '<div class="form-feedback success">Todo updated successfully: ' . htmlspecialchars($todo_name) . '</div>';
                // You may redirect or perform additional actions after successful submission
                // header('Location: list.php'); // Redirect example
            }
            ?>
        </div>
    </div>
</body>
</html>
