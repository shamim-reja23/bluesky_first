<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet Person</title>
    <style>
        
        form{
            width: 400px;
            margin: auto;
            padding: 30px;
            font-size: 20px;
            padding-bottom: 30px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        form input{
            margin-bottom: 10px;
            display: block;
            width: 70%;
            border-radius: 10px;
            padding: 10px;
            border:1px solid black;
        }
        button{
            padding: 10px 20px;
            border-radius: 10px;
            border: 1px solid black;
            width: 75%;
            cursor: pointer;
            font-size: medium;
        }
        .greeting{
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 5px;
            border-left: 5px solid #4CAF50;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br>
        Number of Greetings: <input type="number" name="n" required><br>

        <button type="Submit">Greet</button>

    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST["name"];
        $n = (int)$_POST["n"];
        echo"<div>";
        for($i = 0; $i < $n; $i++) {
            echo"<p class='greeting'> Hello, ".htmlspecialchars($name)."!</p>";
        }    
        echo "</div>";
    }
?>
