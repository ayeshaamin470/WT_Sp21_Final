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
  
<script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				
				get("err_name").innerHTML="Name Required";
				get("err_name").style.color="red";
				hasError=true;
				
			}
			if(get("dob").value == ""){
				get("err_dob").innerHTML="dob Required";
				hasError=true;
				
			}
			if(get("ID").value == ""){
				get("err_ID").innerHTML="ID Required";
				hasError=true;
				
			}
			
			if(get("course").value == ""){
				get("err_course").innerHTML="course Required";
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
			get("err_dob").innerHTML="";
			get("err_course").innerHTML="";
		}
	</script>
   
</head>
<body>
   <h1> 
			<form  action="" method="post" onsubmit="return validate()">
	<table>
				<h3>ADD STUDENTS</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span><span id="err_name"></span></td>
                </tr>
			
				<tr>
							<td><span>ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span><span id="err_ID"></span><</td>
				</tr>
				<tr>
				<td><span> Date of Birth:</span></td>
                    
                    <td>:<input type="text" placeholder="dob" value="<?php echo $dob ?>" name="dob">
                    <?php echo $err_dob ?><span id="err_dob"></span> </td>
                </tr>
				
				<tr>
				<td><span> Courses:</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $c ?>" name="c">
                    <?php echo $err_c ?></span><span id="err_course"> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD " ></td>
				</tr>
					<td><a href="http://localhost/FinalProject/view/showstudent.php">Go back</a></td>

			</table>


		</form></h1>
		

</body>
</html>