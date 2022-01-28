<?php
function add_user($username, $password){
    $myfile = fopen("users.txt","w") or die("Unable to open file");
    fwrite($myfile, $username + "\n" + $password + "\n");
    fclose($myfile);
}
?>