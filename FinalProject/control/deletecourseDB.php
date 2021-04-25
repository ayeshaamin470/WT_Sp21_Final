<?php
       $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
?>

<?php
      $id = $_GET['id'];
	   $sql = "DELETE FROM course WHERE CID= '$id'";
    $result = mysqli_query($conn, $sql);
     
header("Location:http://localhost/froms/view/showcourse.php");
    
		 


?>
