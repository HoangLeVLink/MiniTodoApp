<!DOCTYPE html>
<html>
<head>
    <title>Todo detail</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>TODO Detail</h1>
        <?php

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Content(Full): " . $row["content"]. "<br>";
            }
        } else {
            echo "Non Existing ID.<br>";
        }
        
        ?>
        <br>
    </div>
</body>
</html>