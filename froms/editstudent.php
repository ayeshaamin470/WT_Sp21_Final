<?php

    $name="";
    $id="";
    $c="";
    $deptid="";
    $err_name="";
    $err_id="";
    $err_c="";
    

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

    }
?>
<html>
<head>
   
</head>
<body>
    <form method="post">
	<table>
				<h3>Update Information</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				<tr>
				
				<tr>
				<td><span> Courses</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $c ?>" name="c">
                    <?php echo $err_c ?></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				
                        <tr>
						    <td>
                                <input type="submit" name="Edit" value="Edit">
                            </td>
                          
				        </tr>

			</table>


		</form></h1>
		

</body>
</html>