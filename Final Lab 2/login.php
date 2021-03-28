<?php
	$uname="";
	$pass="";
	$name="";	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$name=$_POST["name"];
		$servername="localhost";
		$username="root";
		$password="";
		$db_name="wt_sp21_l";

		$conn = mysqli_connect($servername,$username,$password,$db_name);
		$conn = mysqli_connect("localhost","root","","wt_sp21_l");
		$query="insert into admin values($name,'$uname','$pass','User')";
		if(mysqli_query($conn,$query)){
			echo "User inserted";
		}
		else{
			echo "Can not insert user";
		}
	}
?>

<html>
	<body>
		<form action="" method="post">
			<input type="text" name="name" placeholder="name"><br>
			<input type="text" name="uname" placeholder="username"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<input type="submit" value="register">
		</form>
	</body>
</html> 