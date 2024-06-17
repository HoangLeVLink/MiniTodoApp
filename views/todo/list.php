<!DOCTYPE html>
<html>
<head>
    <title>List</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>TODO List</h1>
        <?php

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Name: " . $row["todo_name"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        
        ?>
        <br>
    </div>
</body>
</html>