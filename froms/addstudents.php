<?php
	$name="";
    $id="";
    $dob="";
    $c="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name=$_POST["name"];
		$id=$_POST["id"];
		$dob=$_POST["dob"];
		$c=$_POST["c"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into student values('$name','$id','$dob','$c' ,'user')";
		if(mysqli_query($conn,$query)){
			echo "user inserted";
		}
		else{
			echo "Can not insert user";
		}
	}
?>

<?php

    $name="";
    $id="";
    $dob="";
    $c="";
    $deptid="";
    $err_name="";
    $err_id="";
    $err_dob="";
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

        if(empty($_POST["dob"])){
            $err_dob="*DOB required";
        }
        else{
            $dob=$_POST["dob"];
        }

        if(empty($_POST["c"])){
            $err_c="*course required";
        }
        else{
            $c=$_POST["c"];
        }
    }
?>
<html>
<head>
   
</head>
<body>
    <form method="post">
	<table>
				<h3>ADD STUDENTS</h3>
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
				<td><span> Date of Birth:</span></td>
                    
                    <td>:<input type="text" placeholder="dob" value="<?php echo $dob ?>" name="dob">
                    <?php echo $err_dob ?></span> </td>
                </tr>
				
				<tr>
				<td><span> Courses:</span></td>
                    
                    <td>:<input type="text" placeholder=" " value="<?php echo $c ?>" name="c">
                    <?php echo $err_c ?></span> </td>
                </tr>
				
				
				
				
				
				
				<br>
				<tr>
					<td><input type="submit" value="ADD "></td>
				</tr>

			</table>


		</form></h1>
		

</body>
</html>