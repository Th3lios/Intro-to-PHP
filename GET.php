<?php 
$name = $_GET["name"];
$pass = $_GET["pass"];
if (isset($_GET["name"]) && isset($_GET["pass"])) {
	if(!empty($name) && !empty($pass)){
	echo 'nombre: '.'<b>'.$_GET["name"].'</b>'.'<br/>';
    echo 'contrasenha: '.'<b>'.$_GET["pass"].'</b>';
    }else{ echo 'Rellene todos los datos';}
}

 ?>
