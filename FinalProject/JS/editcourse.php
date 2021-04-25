<html>
	<body>
		
		
			    
			<form  action="" method="post" onsubmit="return validate()">
			<fieldset>
	  
<legend><h1>UPDATE COURSE</h1></legend>
<table>
			

			<tr>
			    <td><span>Course ID</span></td>
				<td>:<input type="text"  id="ID" name="ID"><span id="err_ID"></span><br></td>
				</tr>
				<tr>
				     <td><span>Price($)</span></td>
			<td>:<input type="text" id="P" name="P"><span id="err_P"></span><br>	</td>
			</tr>
			
				<tr>
				<td><input type="submit" value="Update "></td>
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
			
			if(get("P").value == ""){
				get("err_P").innerHTML=" Price Required";
				hasError=true;
				
			}
			if(get("ID").value == ""){
				get("err_ID").innerHTML=" ID Required";
				hasError=true;
			}
			
			
			
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			
			get("err_ID").innerHTML="";
			get("err_P").innerHTML="";
		
		}
	</script>
</html>