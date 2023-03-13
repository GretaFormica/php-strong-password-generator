<?php

    include 'function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
</head>
<body>
    <form method="GET">
        <input type="number" id="number" name="number">
        <button type="submit">invia</button>
    </form>

    <?php 

        if(isset($_GET["number"])){

            $_number = $_GET["number"];
            $pass = GeneraPassword($_number);

            echo $pass;

        }

    ?>

    
</body>
</html>