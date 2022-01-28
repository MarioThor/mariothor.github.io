<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $text = $username;

    $file = fopen('users.txt','w+') or die("Unable to open file");
    fwrite($file, $text);
    fclose($file);
?>