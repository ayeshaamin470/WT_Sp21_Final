<?php 
include('../control/addteachervalid.php');
?>
<html>
<head>
   
</head>
<body>
    <form method="post">
	<fieldset>
	  
<legend><h3>ADD Teacher</h3></legend>
	<table>
				
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>Tecging ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				
				
				<tr>
				<td><span> Course</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $course ?>" name="course">
                    <?php echo $err_course ?></span> </td>
                </tr>
				
				<tr>
				<td><span> Department</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $dept ?>" name="dept">
                    <?php echo $err_dept ?></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td>
				</tr>

			</table>


		</form></h1>
		

</body>
</html>