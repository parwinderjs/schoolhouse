<?php
	
	function connect(){ 
	$database = "schoolhouse";
	$server = "localhost";
	$user = "root";
	$password = "";
	return $con = mysqli_connect($server, $user, $password, $database);
	}
 ?>