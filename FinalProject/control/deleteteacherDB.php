<?php
       $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
?>
<
<?php
      $id = $_GET['id'];
	   $sql = "DELETE FROM teacher WHERE TID = '$id'";
    $result = mysqli_query($conn, $sql);
     
header("Location:http://localhost/FinalProject/view/showteacher.php");
    //$query = "DELETE FROM student WHERE ID = '{$id}'";
    //$result = mysqli_query($conn, $sql);
		// $result = mysqli_query($conn, $query);
		 


?>
