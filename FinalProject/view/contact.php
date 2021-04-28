<?php 
include('../control/contactvalid.php');
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
	<script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				
				get("err_name").innerHTML=" Name Required";
				
				hasError=true;
			
			}
			if(get("P").value == ""){
				get("err_P").innerHTML=" Phone number Required";
				hasError=true;
			
			}
			if(get("email").value == ""){
				get("err_email").innerHTML=" Email Required";
				hasError=true;
			
			}
			
			if(get("sub").value == ""){
				get("err_sub").innerHTML=" Subject Required";
				get("err_sub").style.color="red";
				hasError=true;
				
			}
			
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_email").innerHTML="";
			get("err_P").innerHTML="";
			get("err_sub").innerHTML="";
		}
	</script>

<h2><img src="q.png" width="450" height="500"></h2>
		<h1><form  action="" method="post" onsubmit="return validate()">
			<table>
				<h3>Contact Us</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="First name" value="<?php echo $fname; ?>" name="fname"> 
                   <?php echo $fnameErr; ?></span><span id="err_name"></span></td>
                </tr>
			
				<tr>
							<td><span>Email</span></td>

					<td>:<input type="text" placeholder="Email" name="email" value="<?php echo $email?>"<span><?php echo $emailErr
					?></span><span id="err_email"></td>
				</tr>
				<tr>
				<td><span>Phone number</span></td>
                    
                    <td>:<input type="text" placeholder="Phone Number" value="<?php echo $p; ?>" name="p">
                    <?php echo $pErr; ?></span><span id="err_P"></span </td>
                </tr>
				
				
				
				<tr>
					<td><span>Subject</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					 <span style="color:red"> <?php  echo $subErr ?> </span><span id="err_sub"></span>
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