<?php
 require_once  'db_config.php';
 function insertUser($name, $username,$password, $email){
		 $query = "INSERT INTO categories VALUES(NULL,'$name')";
		 echo $query;
		 execute($query);
 }
 function getCategory($id){
		 $query = "*select* from categories where id =$id";
	     $result= get($query);
		 if count ($result>0){
			 return $result[0];
		 }
        return false;
 }
 
  function getAllCategories(){
		 $query = "select* from categories";
		 $result = get($query)
		 return $result;
  }
 

?>