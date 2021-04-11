<?php

    $name="";
    $id="";
    $course="";
	
   
    $err_name="";
    $err_id="";
    $err_course="";
  

    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        if(empty($_POST["name"])){
            $err_name="*Name required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["id"])){
            $err_id="*ID required";
        }
        else{
            $id=$_POST["id"];
        }


        if(empty($_POST["course"])){
            $err_course="*course required";
        }
        else{
            $course=$_POST["course"];
        }
		
    }
?>
<html>
<head>
   
</head>
<body>
<h1>update info</h1>
    <form method="post">
	<table>
				
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>Tecging ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				
				
				<tr>
				<td><span> Course</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $course ?>" name="course">
                    <?php echo $err_course ?></span> </td>
                </tr>
				
				 <tr>
						    <td>
                                <input type="submit" name="Edit" value="Edit">
                            </td>
                            
				        </tr>
				
				
				
				
				
				
				
				

			</table>


		</form></h1>
		

</body>
</html>