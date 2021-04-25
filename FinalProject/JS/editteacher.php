<html>
	<body>
		
		
			    
			<form  action="" method="post" onsubmit="return validate()">
			<fieldset>
	  
<legend><h1>ADD COURSE</h1></legend>
<table>
			
			<tr>
			  <td><span>Name </span></td>
				<td>:<input type="text"  id="name" name="name"><span id="err_name"></span><br></td>
				</tr>
				<tr>
			

			<tr>
			  <td><span>Tecging ID</span></td>
				<td>:<input type="text"  id="ID" name="ID"><span id="err_ID"></span><br></td>
				</tr>
				<tr>
				   	<td><span> Department</span></td>
			<td>:<input type="text" id="dept" name="dept"><span id="err_dept"></span><br>	</td>
			</tr>
			</tr>
			     
					<td><span> Courses:</span></td>
				<td>:<input type="text" id="course" name="course"><span id="err_course"></span><br>	</td>
				</tr>
				<tr>
				<td><input type="submit" name="reg"></td>
				</tr>
				</table>
			</form>
	     </div>
		
		
	</body>
	
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
</html>