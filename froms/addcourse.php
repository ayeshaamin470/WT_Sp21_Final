<?php

    $name="";
    $id="";
    $p="";
	$d= "";
	$dept="";
    $err_dept="";
    $err_name="";
    $err_id="";
    $err_p="";
    $err_d="";

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


        if(empty($_POST["p"])){
            $err_p="*price required";
        }
        else{
            $p=$_POST["p"];
        }
		 if(empty($_POST["dept"])){
            $err_dept="department required";
        }
        else{
            $dept=$_POST["dept"];
        }
		if(empty($_POST["price"])){
            $err_price="price required";
        }
        else{
            $err_price=$_POST["price"];
        }

		
    }
?>
<html>
<head>
   
</head>
<body>
    <form method="post">
	<table>
				<h3>ADD Course</h3>
			<tr>
			        <td><span>Course Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>
							<td><span>Course ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>
				
				
				<tr>
						    <td>
                                <span>Price($)</span>
                            </td>
                            
                               <td>:<input type="text" placeholder="$" name="price">
                                <?php echo $p?><span><?php echo $err_p; ?></span>
                            </td>
				        </tr>

                       
				
				<tr>
			        <td><span>Department </span></td>
						
                    <td>:<input type="text" placeholder="dept" value="<?php echo $dept ?>" name="dept"> 
                   <?php echo   $err_dept ?></span></td>
                </tr>
				
				
					<td><span>Description</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					 		<?php echo $d?>
					 <span> <?php  echo $err_d ?> </span>
                        </td>
				</tr>
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td>
				</tr>

			</table>


		</form></h1>
		

</body>
</html>