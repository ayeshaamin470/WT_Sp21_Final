<?php

$uname = $pass = $fname = $lname = $p = $email = $dob= "";
?>

<?php
	$nameErr = $fnameErr = $lnameErr = $passErr = $pErr = $emailErr = $dobErr="";
    $uname = $pass = $fname = $lname = $p = $email = $dob= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["uname"]))
      {
  		$nameErr = "Username is required";
  	}
     else if(strlen($_POST["uname"])<5)
  	 {
  	  $nameErr="Enter valid name";
  	 }
  	
  	       	 else    if (empty($_POST["pass"]))
      {
  		$passErr = "password is required";
  	   }
     else if(strlen($_POST["pass"])<6)
  	 {
  	  $passErr="password must be Atleast 6 charecter";
  	 }

  	
	  else if(empty($_POST["p"])){
                $pErr="Number is required";
            }
			else if(is_numeric($_POST["p"])==false){
                $pErr="Please enter digit";
            }

          

  	    	  
       
       else if(empty($_POST["fname"])){
                $fnameErr="Name is required";
            }
            
			       if(empty($_POST["lname"])){
                $lnameErr="Name is required";
            }
            
      
	   if (empty($_POST["email"]))
      {
  		$emailErr = "email is required";
  	  }
	   else{
		 $uname=$_POST["uname"];
		  $fname=$_POST["fname"];
		   $lname=$_POST["lname"];
		$email=$_POST["email"];
		$p=$_POST["p"];
		$pass=$_POST["pass"];
		$dob=$_POST["dob"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into signup values ('$fname','$lname','$uname','$pass','$email','$p','$dob')";
		if(mysqli_query($conn,$query)){
			echo "user inserted";
		}
		else{
			echo "Can not insert user";
		}
  	 
    }
   }
	?>