<?php
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'todolist');
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>TP en binome</title>
</head>

<body>
    <div>
        <div class="add_task">
            <input type="text" placeholder="Task Title" name="taskt_title"/>
            <button type="button">Add</button>
        </div>
        <br><br>
        <div class="tasks">
            <div class="task">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div>
                    <button class="btn-1">Undo</button>
                    <button class="btn-delete">X</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>