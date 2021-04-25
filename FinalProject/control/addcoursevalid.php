<?php

    $name="";
    $id="";
    $p="";
	$d= "";
	?>
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
        

       else if(empty($_POST["id"])){
            $err_id="*ID required";
        }
        


       else if(empty($_POST["p"])){
            $err_p="*price required";
        }
        
		
       
		/*else if(empty($_POST["d"])){
            $err_d="des required";
        }*/

       
		else{
		$name=$_POST["name"];
		$id=$_POST["id"];
		$p=$_POST["p"];
		$d=$_POST["subject"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into course values ('$name','$id','$p','$d')";
		if(mysqli_query($conn,$query)){
			echo "user inserted";
		}
		else{
			echo "Can not insert user";
		}
		}
		
    }
?>