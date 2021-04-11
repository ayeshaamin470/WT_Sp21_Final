<?php

    $name="";
    $id="";
    $course="";
	$dept=" " ;
   
    $err_name="";
    $err_id="";
    $err_course="";
    $err_dept="";

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
		if(empty($_POST["dept"])){
            $err_dept="*department required";
        }
        else{
            $dept=$_POST["dept"];
        }
    }
?>
<html>
<head>
   
</head>
<body>
    <form method="post">
	<table>
				<h3>ADD Teacher</h3>
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
				<td><span> Department</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $dept ?>" name="c">
                    <?php echo $err_dept ?></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td>
				</tr>

			</table>


		</form></h1>
		

</body>
</html>