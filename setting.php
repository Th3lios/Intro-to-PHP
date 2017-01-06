<?php 

require 'connect.php';

$Name = $_POST['name'];
$Password = $_POST['pass'];
$Mail = $_POST['mail'];
$ID = $_POST['id'];

$sql = "INSERT INTO `user_info` (Name,Password,Mail,ID) Values ('$Name','$Password','$Mail','$ID')";

if(!mysql_query($sql)){//Con mysql_query ejecutas la consulta seleccionada ($sql), esta funcion es booleana
	echo "<br>Not inserted";

}else{
	echo "<br>Inserted";
}

header("refresh:2 ; url=index.html");
 ?>

