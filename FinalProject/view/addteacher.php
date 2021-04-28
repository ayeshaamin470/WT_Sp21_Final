<?php 
include('../control/addteachervalid.php');
?>
<html>
<head>
   <script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				
				get("err_name").innerHTML="Name Required";
				
				hasError=true;
				
			}
			if(get("dept").value == ""){
				get("err_dept").innerHTML="Dept Required";
				hasError=true;
			
			}
			if(get("ID").value == ""){
				get("err_ID").innerHTML="ID Required";
				hasError=true;
			
			}
			
			if(get("course").value == ""){
				get("err_course").innerHTML="Course Required";
				hasError=true;
			
			}
		
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_ID").innerHTML="";
			get("err_dept").innerHTML="";
			get("err_course").innerHTML="";
		}
	</script>
</head>
<body>
   <form  action="" method="post" onsubmit="return validate()">
	<fieldset>
	  
<legend><h3>ADD Teacher</h3></legend>
	<table>
				
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span><span id="err_name"></span></td>
                </tr>
			
				<tr>
							<td><span>Tecging ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span><span id="err_ID"></span></td>
				</tr>
				
				
				<tr>
				<td><span> Course</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $course ?>" name="course">
                    <?php echo $err_course ?></span><span id="err_course"></span> </td>
                </tr>
				
				<tr>
				<td><span> Department</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $dept ?>" name="dept">
                    <?php echo $err_dept ?></span><span id="err_dept"></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td><br>
						
				</tr>


			</table>


		</form></h1>
		

		<a href="http://localhost/FinalProject/view/showteacher.php">Go back</a>
</body>
</html>