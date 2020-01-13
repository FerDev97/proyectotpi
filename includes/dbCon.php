<?php
 
function conectar () {
	$db_con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	if (mysqli_connect_errno($db_con)) 
		echo "Fallo al contenctar a MySQL: " . mysqli_connect_error();
	// $db_con->set_charset("utf8");
	$db_con->query("SET NAMES 'utf8'");
	return $db_con; 
}
function conectar_ss () { //Funcion conectar Server Side
	$db_con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	
	if (mysqli_connect_errno($db_con))
		echo "Fallo al contenctar a MySQL: " . mysqli_connect_error();
	$db_con->query("SET NAMES 'utf8'");	
	return $db_con; 
}
?>