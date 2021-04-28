<?php


$user1 = $_POST['uname'];

if($user1!="")
{


	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="SELECT * FROM course WHERE Name = '$user1'";
	 $result = mysqli_query($conn, $query);
		

 
	
	 






      while($row = mysqli_fetch_assoc($result)){
		  
			echo "Price of ".$user1." course is ".$row['price']." ";

	  }
	  
}
?>




