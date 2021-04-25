<html>
	<body>
		
		
			    
			<form  action="" method="post" onsubmit="return validate()">
			<fieldset>
	  
<legend><h1>Update Student</h1></legend>
<table>
			
			<tr>
			    <td><span>ID</span></td>
				<td>:<input type="text"  id="ID" name="ID"><span id="err_ID"></span><br></td>
				</tr>
				<tr>
				    
					<td><span> Courses:</span></td>
				<td>:<input type="text" id="course" name="course"><span id="err_course"></span><br>	</td>
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
			
			if(get("ID").value == ""){
				get("err_ID").innerHTML=" ID Required";
				hasError=true;
			
			}
			
			if(get("course").value == ""){
				get("err_course").innerHTML=" Course Required";
				hasError=true;
				
			}
			
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			
			get("err_ID").innerHTML="";
		
			get("err_course").innerHTML="";
		}
	</script>
</html>