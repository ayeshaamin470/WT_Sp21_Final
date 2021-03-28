<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="wt_sp21_l";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}

	$query="insert into student values('MIA','771','1/1/2000','14','3.5','101')";
		//$query="insert into admin values('Lina','Lina12@edu','114')";
				//$query="insert into department values('kate','118')";

	if(mysqli_query($conn,$query)){
		echo "Inserted";
	}else{
		echo "Problem";
	}
?> 