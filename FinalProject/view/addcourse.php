<?php
include('../control/addcoursevalid.php');

?>
<html>
<head>
   
</head>
<body>
   	    
		
	
	  	<fieldset>
<legend><h1>ADD COURSE</h1></legend>
	<table>
			  <form method="post">	
			<tr>
			        <td><span>Course Name </span></td>
						
                    <td>:<input type="text" placeholder="name"  value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>Course ID</span></td>

					<td>:<input type="text" placeholder="ID"  name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				
				
				<tr>
						    <td>
                                <span>Price($)</span>
                            </td>
                            
                               <td>:<input type="text" placeholder="$" name="p" value="<?php echo $p?>"<span><?php echo $err_p
					?></span></td>
                                
                            </td>
				        </tr>

                    
				
					<td><span>Description</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					 		<?php //echo $d?>
					 <span> <?php // echo $err_d ?> </span>
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