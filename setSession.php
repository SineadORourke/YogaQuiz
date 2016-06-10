<?php
$name = $_REQUEST["name"];
echo $name;
session_start();
$_SESSION["name"]=$name;
echo $_SESSION["name"];
?>

