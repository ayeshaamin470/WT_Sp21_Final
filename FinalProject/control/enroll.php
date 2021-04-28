
<?php
session_start();
       $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
		$username=$_SESSION['username'];
		$id = $_GET['id'];
	    $conn = mysqli_connect($server,$user,$password,$db);
$sql1 = "SELECT * FROM student WHERE Name = '$username'";
    $result1 = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($result1) > 0)  {
      while($row = mysqli_fetch_assoc($result1)){
        $sid=$row['ID'];
      }
    }
	$sql2 = "SELECT * FROM course WHERE CID = '$id'";
    $result2 = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($result2) > 0)  {
      while($row = mysqli_fetch_assoc($result2)){
        $cname=$row['Name'];
      }
    }
	
      $id = $_GET['id'];
	   $sql = "INSERT INTO enroll(studentName, studentID, courseID, courseName) VALUES ('$username','$sid','$id','$cname')";
    $result = mysqli_query($conn, $sql);
     
header("Location:http://localhost/FinalProject/view/studentcourses.php");


?>