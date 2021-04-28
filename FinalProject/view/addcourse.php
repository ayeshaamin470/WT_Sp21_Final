<?php
include('../control/addcoursevalid.php');

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
</head>
<body>
   	    
		
	
	  	<fieldset>
<legend><h1>ADD COURSE</h1></legend>
	<table>
			 	<form  action="" method="post" onsubmit="return validate()">
			<tr>
			        <td><span>Course Name </span></td>
						
                    <td>:<input type="text" placeholder="name"  value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span><span id="err_name"></span></td>
                </tr>
			
				<tr>
							<td><span>Course ID</span></td>

					<td>:<input type="text" placeholder="ID"  name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span><span id="err_ID"></span></td>
				</tr>
				
				
				<tr>
						    <td>
                                <span>Price($)</span>
                            </td>
                            
                               <td>:<input type="text" placeholder="$" name="p" value="<?php echo $p?>"<span><?php echo $err_p
					?></span><span id="err_P"></span></td>
                                
                            </td>
				        </tr>

                    
				
					<td><span>Description</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					 		<?php //echo $d?>
					 <span> <?php // echo $err_d ?> </span><span id="err_d"></span>
                        </td>
				</tr>
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td>
				</tr>

			</table>
		</form>
		</body>
		
		
		
		
</html>