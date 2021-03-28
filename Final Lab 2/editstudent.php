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

	$query="update student values('MIA','71','1/1/2000','14','3.5','101')" ;
		
	if(mysqli_query($conn,$query)){
		echo "Inserted";
	}else{
		echo "Problem";
	}
?> 