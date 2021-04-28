<?php

include('../control/addsignupvalid.php');
?>



<html>
	<head></head>
	<body>
	
	<style>
	body {
  background-color: lightblue;
}
	h1{
		padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 700px;
  top: 60px;
font-size: 20px;}
h2{position: absolute;
left:35px;
top:30px;}

h3{
font-size:30px;}
	
	</style>
	

<h2><img src="q.png" width="500" height="450"></h2>
		<h1><form action="" method="post">
			<table>
				<h3>Register for EduCare (as Student)</h3>
			<tr>
			        <td rowspan="2"><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="First name" value="<?php echo $fname; ?>" name="fname"> 
                   <?php echo $fnameErr; ?></span></td>
                </tr>
			<tr>
                    
					<td>:<input type="text" placeholder="Last name" value="<?php echo $lname; ?>" name="lname"> 
                   <?php echo $lnameErr; ?></span></td>
				</tr>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" placeholder="Username" name="uname" value="<?php echo $uname?>"<span><?php echo $nameErr
					?></span></td>

				</tr>
					<tr>
							<td><span>Password: </span></td>

					<td>:<input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>"<span><?php echo $passErr
					?></span></td>
				</tr>
				<tr>
							<td><span>Confirm Password </span></td>

					<td>:<input type="password" placeholder="Password" name="cpass" value="<?php echo $pass?>"<span><?php echo $passErr
					?></span></td>
				</tr>
				<tr>
							<td><span>Email</span></td>

					<td>:<input type="text" placeholder="Email" name="email" value="<?php echo $email?>"<span><?php echo $emailErr
					?></span></td>
				</tr>
				<tr>
				
					<td><span>Phone number</span></td>
                    
                    <td>:<input type="text" placeholder="Phone Number" value="<?php echo $p; ?>" name="p">
                    <?php echo $pErr; ?></span> </td>
                </tr>
				
				<td><span> Date of Birth:</span></td>
                    
                    <td>:<input type="text" placeholder="dob" value="<?php echo $dob ?>" name="dob">
                    <?php echo $dobErr ?></span> </td>
                </tr>
				<tr>
					<td><input type="submit" value="Signup "></td>
				</tr>
				
				
	             </body>
				
			</table>


		</form></h1>
		
		
	</body>
</html>