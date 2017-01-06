<?php 

function returnFunction(){
   return '<b>helloWorld</b>';
}
 $time = date('h:i:s');
 $date = date('d/m/y');
 echo "UTC: ".time()."<br>";
 echo $time."<br>";
 echo $date."<br>";
 echo '<b>Hello</b>'."<br>";
function recieveFunction($value){
  echo $value."<br>";

}

for ($i=0; $i < 5; $i++) { 
	recieveFunction(returnFunction());
}
 ?>
