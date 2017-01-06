<?php 
//setcookie(name,value,expire);
//La cookie permite ejecutar un archivo a traves de ciertas condiciones, en este caso el tiempo
//solo se permite ver el nombre del estudiante por 10 segundos
$time = time();
echo $time;
setcookie('student','mark',$time+10);
header("refresh:1 ; url=cookieTest.php");//Luego de un segundo cambia a otra pagina
 ?>