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