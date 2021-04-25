<?php
	$name="";
    $id="";
    $course="";
    $dept="";
	/*if($_SERVER["REQUEST_METHOD"] == "POST"){
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
	}*/
?>

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
        

        else if(empty($_POST["id"])){
            $err_id="*ID required";
        }
        


        else if(empty($_POST["course"])){
            $err_course="*course required";
        }
        
		else if(empty($_POST["dept"])){
            $err_dept="*department required";
        }
        
    

		else{
			$name=$_POST["name"];
		$id=$_POST["id"];
		$course=$_POST["course"];
		$dept=$_POST["dept"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into teacher values ('$name','$id','$course','$dept')";
		if(mysqli_query($conn,$query)){
			echo "user inserted";
		}
		else{
			echo "Can not insert user";
		}
		}
	}
		?>
   