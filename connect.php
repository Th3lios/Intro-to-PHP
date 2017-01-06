<?php 

$mysql_host = 'localhost';
$mysql_user='root';
$mysql_pass='';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)){ // verificas si estas conectado al mysql
  	 die('Cannot connect to database'); //or exit(message)
  }
  else
  { 
  	if(!@mysql_select_db('phptest')){//Verificas si existe esa base de datos
      die('Cannot connect to database'); //or exit(message)  
    }
  }
echo 'Connection succes';
 ?>