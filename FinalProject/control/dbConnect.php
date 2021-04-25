<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="froms";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}

	$query="insert into student values('Fara','47','1/1/2000','2')";
	if(mysqli_query($conn,$query)){
		echo "Inserted";
	}else{
		echo "Problem";
	}
?> 