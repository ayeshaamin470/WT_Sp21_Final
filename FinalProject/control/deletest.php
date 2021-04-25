<?php
        $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db); 
    $s_id = $_GET['id'];
  

    $query = "DELETE FROM student WHERE id = '{$id}'";
    $query = mysqli_query($conn, $query);

    header("Location: http://localhost/teacher/teachersection.php");

?>
