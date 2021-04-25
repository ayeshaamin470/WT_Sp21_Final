<?php 
include('control/contactvalid.php');
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
  padding-right: 120px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 700px;
  top: 90px;
font-size: 20px;}
h2{position: absolute;
left:35px;
top:30px;}

h3{
font-size:30px;}
	
	</style>
	

<h2><img src="q.png" width="450" height="500"></h2>
		<h1><form action="" method="post">
			<table>
				<h3>Contact Us</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="First name" value="<?php echo $fname; ?>" name="fname"> 
                   <?php echo $fnameErr; ?></span></td>
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
				
				
				
				<tr>
					<td><span>Subject</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					 <span style="color:red"> <?php  echo $subErr ?> </span>
                        </td>
				</tr>
				
				<br>
				<tr>
					<td><input type="submit" value="Submit "></td>
				</tr>

			</table>


		</form></h1>
		
	</body>
</html>