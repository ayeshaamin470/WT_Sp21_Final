<html>
	<body>
		
		
		
			    
			<form  action="" method="post" onsubmit="return validate()">
			<fieldset>
	  
<legend><h1>Contact US</h1></legend>
<table>
			
			<tr>
			       <td><span>Name </span></td>
				<td>:<input type="text"  id="name" name="name"><span id="err_name"></span><br></td>
				</tr>
				<tr>
			

			<tr>
			    <td><span>Email</span></td>
				<td>:<input type="text"  id="email" name="email"><span id="err_email"></span><br></td>
				</tr>
				<tr>
				     <td><span>Phone number</span></td>
			<td>:<input type="text" id="P" name="P"><span id="err_P"></span><br>	</td>
			</tr>
			</tr>
			     
					<td><span>Subject</span></td>
				<td>:<input type="text" id="sub" name="sub"><span id="err_sub"></span><br>	</td>
				</tr>
				<tr>
				<td><input type="submit" name="reg"></td>
				</tr>
				</table>
			</form>
	  
		
		
	</body>
	
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
</html>