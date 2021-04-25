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
	   $sql = "DELETE FROM student WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
     
header("Location:http://localhost/froms/view/showstudent.php");
    //$query = "DELETE FROM student WHERE ID = '{$id}'";
    //$result = mysqli_query($conn, $sql);
		// $result = mysqli_query($conn, $query);
		 


?>
