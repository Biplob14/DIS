<!-- DATABASE CONNECTION -->
<?php  
// session_start();

$db= mysqli_connect("localhost","root","","dis");


if (!isset($db)) {
	echo "not connected". mysqli_error($db);
}else{

	echo "connected"."</br>";
}


?>