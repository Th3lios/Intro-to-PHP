<?php 
//Setear sesion 

session_start();
$_SESSION['name']='mark';
$_SESSION['age']=21;
$_SESSION['weight']=45;
echo "done";

//Para quirar el set hay que usar unset, este es utilizado para desetear una variable
//unset($_SESSION['name']);

//Para dessetear todas las variables en una accion hay que usar
//session_destroy();
 ?>