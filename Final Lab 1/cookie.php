
<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$username=$_POST["username"];
		$password=$_POST["password"];
		if ($username == "aye@edu" && $password=="12345678") {
			setcookie("username",$username,time()+20);
			header("Location: dashbord.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<table>
				<tr>
					<img src="login.jpg" width="300" height="150">
					<td><input type="email" placeholder="username" name="username"> 
					</span></td>

				</tr>
				<tr>
					<td><input type="password" placeholder="password" name="password">
					</span></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" value="Log in"></td>
				</tr>
				
     <tr><td> <input type="checkbox" checked="checked" name="remember"> Remember me</td></tr>

			</table>
	</form>


      
    
    
</body>
</html>