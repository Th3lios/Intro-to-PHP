<?php 
//Se puede utilizar la sesion seteada en cualquier archivo php sin necesidad de usar include
session_start();
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$weight = $_SESSION['weight'];
echo $name."<br>",$age."<br>",$weight."<br>";

 ?>