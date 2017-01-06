<?php
//La diferencia del POST con el GET es que el post no tiene limite  y el get si (1024 caracteres)
//por lo que no se recomienda en la seccion password utilizar get
if(($_POST["name"]==="mark") && ($_POST["pass"]==="lol")){
echo "Is correct";
}else{
echo "Incorrect";
}
 ?>


