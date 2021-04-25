<?php 
include('../control/addstudentsvalid.php');
?>
<html>
<head>
<style>
body {
  background-color: lightblue;
}

h1{
		padding-top: 10px;
  padding-right: 60px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 450px;
  top: 60px;
font-size: 20px;}
  
  </style>
  

   
</head>
<body>
   <h1> <form method="post">
	<table>
				<h3>ADD STUDENTS</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				<tr>
				<td><span> Date of Birth:</span></td>
                    
                    <td>:<input type="text" placeholder="dob" value="<?php echo $dob ?>" name="dob">
                    <?php echo $err_dob ?></span> </td>
                </tr>
				
				<tr>
				<td><span> Courses:</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $c ?>" name="c">
                    <?php echo $err_c ?></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD " ></td>
				</tr>
					

			</table>


		</form></h1>
		

</body>
</html>