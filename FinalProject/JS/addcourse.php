<html>
	<body>
		
		
			    
		 <action="" method="post" onsubmit="return validate()">
			<fieldset>
	  
<legend><h1>ADD COURSE</h1></legend>
<table>
			
			<tr>
			    <td><span>Course Name</span></td>
				<td>:<input type="text"  id="name" name="name"><span id="err_name"></span><br></td>
				</tr>
				<tr>
			

			<tr>
			    <td><span>Course ID</span></td>
				<td>:<input type="text"  id="ID" name="ID"><span id="err_ID"></span><br></td>
				</tr>
				<tr>
				     <td><span>Price($)</span></td>
			<td>:<input type="text" id="P" name="P"><span id="err_P"></span><br>	</td>
			</tr>
			</tr>
			     
					<td><span>Description</span></td>
				<td>:<input type="text" id="d" name="d"><span id="err_d"></span><br>	</td>
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
				
				get("err_name").innerHTML="Name Required";
				
				hasError=true;
			
			}
			if(get("P").value == ""){
				get("err_P").innerHTML="Price Required";
				hasError=true;
			
			}
			if(get("ID").value == ""){
				get("err_ID").innerHTML="ID Required";
				hasError=true;
				
			}
			
			if(get("d").value == ""){
				get("err_d").innerHTML="Description Required";
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
			get("err_P").innerHTML="";
			get("err_d").innerHTML="";
		}
	</script>
</html>