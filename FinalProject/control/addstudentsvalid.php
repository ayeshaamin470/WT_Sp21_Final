<?php
	$name="";
    $id="";
    $dob="";
    $c="";
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
       //else{
        //    $name=$_POST["name"];
       // }

        else if(empty($_POST["id"])){
            $err_id="*ID required";
        }
       // else{
       //     $id=$_POST["id"];
       // }

        else if(empty($_POST["dob"])){
            $err_dob="*DOB required";
        }
        //else{
            //$dob=$_POST["dob"];
        //}

        else if(empty($_POST["c"])){
            $err_c="*course required";
        }
        //else{
         //   $c=$_POST["c"];
        //}
		else{
			$name=$_POST["name"];
		$id=$_POST["id"];
		$dob=$_POST["dob"];
		$c=$_POST["c"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into student values ('$name','$id','$dob','$c')";
		if(mysqli_query($conn,$query)){
			echo "user inserted";
		}
		else{
			echo "Can not insert user";
		}
		}
    }
?>