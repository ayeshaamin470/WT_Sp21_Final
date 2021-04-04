<?php

require_once  'db_config.php';

$name= " ";
$err_name= " ";
$hasError = false;
$err_uname=" ";
$uname= " ";
$err_email=" ";
$email= " ";
$err_password=" ";
$password= " ";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	 if (isset($_POST["sign_up"])){
	 if (empty($_POST["name"]))
      {
	  $hasError = true;
	  $err_name= "name required";}
	  
  	 else
     {
  		 $name=$_POST["name"];
  	 }
	 
	 if (empty($_POST["uname"]))
      {
	  $hasError = true;
	  $err_uname= "username required";}
	  
  	 else
     {
  		 $uname=$_POST["uname"];
  	 }
	 if (empty($_POST["password"]))
      {
	  $hasError = true;
	  $err_password= "password required";}
	  
  	 else
     {
  		 $password=$_POST["password"];
  	 }
	 
	 if (!$hasError){
		 insertUser($name,$_POST ["username"], $_POST ["password"], $_POST ["email"]);
			
		 }
	 }
	 if(isset($_POST["btn_login")){
	 if (authenticatetUser($_POST["username"],$_POST["password"])){}
		 header location ("dashboard.php");
	 }
	 echo "invalid info";
		 
	 }
	 
	 function insertUser($name, $username,$password, $email){
		 $query = "INSERT INTO users VALUES(NULL,'$name', '$username','$password', '$email')";
		 echo $query;
		 execute($query);
	 }
	 
	 function authenticatetUser($username,$password){
		 $query = "*select* from users where username ='$username'and password='$password'";
	     $result= get($query);
		 if count ($result>0){
			 return $result =[0];
		 }
	    return false;
}


?>