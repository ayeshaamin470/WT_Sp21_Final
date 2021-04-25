<?php
	$fnameErr =$pErr = $emailErr =$subErr = "";
    $fname= $sub = $p = $email = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

	  if(empty($_POST["p"])){
                $pErr="Number is required";
            }
			else if(is_numeric($_POST["p"])==false){
                $pErr="Please enter digit";
            }

            else{
                $p=$_POST["p"];
            }

  	    	  
       
       if(empty($_POST["fname"])){
                $fnameErr="Name is required";
            }
            else{
                $fname=$_POST["fname"];
            }
			      
      
	   if (empty($_POST["email"]))
      {
  		$emailErr = "email is required";
  	  }
  	 else
     {
  		 $email=$_POST["email"];
  	 }
	  if(empty($_POST["subject"])){
                $subErr="*subject text area must be filled";
            }
            else{
                $sub=$_POST["subject"];
            }
	 if(empty($_POST["p"])||empty($_POST["fname"])||empty($_POST["email"])||empty($_POST["subject"])){
		 echo "Fill all the forms";
	 }
	 else{
		 $name=$_POST["fname"];
		$email=$_POST["email"];
		$p=$_POST["p"];
		$subject=$_POST["subject"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		$query="insert into contact values ('$name','$email','$p','$subject')";
		if(mysqli_query($conn,$query)){
			echo "Complain sent";
		}
		else{
			echo "Can not insert ";
		}
	 }	  
    }
	?>