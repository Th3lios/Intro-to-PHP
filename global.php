<?php 
$name="mark<br>";

echo $name;



function example(){
	global $name; //permite que name sea global dentro de la funcion;
	echo "The name of the student is: $name";
}

example();

 ?>