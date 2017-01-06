<?php 

require 'connect.php';

$query = "SELECT * FROM `user_info`";
if($is_query_run=mysql_query($query)){
	echo "<br>query executed";

	while ($query_executed = mysql_fetch_assoc($is_query_run)) {
		echo '<table border="1" style="width:300px" ><tr><td>'.$query_executed['Name'].'</td><td>'.$query_executed['Password'].'</td><td>'.$query_executed['Mail'].'</td><td>'.$query_executed['ID'].'</td></tr></table>';
	}
}
else
{
	echo "query not executed";
}

 ?>