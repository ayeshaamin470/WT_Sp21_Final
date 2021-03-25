<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="pasta";
	$conn = new mysqli($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}

	
?> 