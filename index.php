<?php

    function GeneraPassword($num) {

        $_all_characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%&?";

        $_password = "";

        for ($i = 0; $i < $num; $i++) {
            $_casual = rand(0, strlen($_all_characters)-1);
            $_password .= $_all_characters[$_casual];
        }

        return $_password;
    };


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