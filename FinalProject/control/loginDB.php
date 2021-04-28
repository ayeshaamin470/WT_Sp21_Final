<?php
$usname=$_POST["uname"];
		 $uspass=$_POST["pass"];
	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
		
	 $conn = mysqli_connect($server,$user,$pass,$db);
 $sql = "SELECT * FROM signup WHERE fname = '$usname' AND password = '$uspass'";
      $result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0) {
      
          session_start();
		 $_SESSION['username']=$_POST["uname"];
		 $_SESSION['password']=$_POST["pass"];
		 header("location: http://localhost/FinalProject/smain.php");
		 
		 
	  
}
else{
	echo "Name & Password didn't match!";
}
?>