<html>
<head><style>
body {
  background-color: lightpink;
}
	

h1{
		padding-top: 25px;
  padding-right: 90px;
  padding-bottom: 70px;
  padding-left: 100px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 430px;
  top: 86px;
font-size: 20px;}


.left {
  position: absolute;
  left: 25px;

    top: 50px;
	font-size: 16px;
}
</style>
</head>
<body>

<?php
session_start();//notforadmin
	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	$username=$_SESSION['username'];//notforadmin
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     
		
?> 
<?php
 $sql = "SELECT * FROM enroll  WHERE studentName = '$username'";
     $result = mysqli_query($conn, $sql);
	  ?>
	  <h1><p><u> Enrolled courses:</u></p>
<table border="1" style="border-collapse:collapse;">

<tr>
<th>CourseID</th>
<th> CourseName</th>



</tr>

<?php
      while($row = mysqli_fetch_assoc($result)){
		  ?>
			<tr>
			
                <td><?php echo $row['courseID']; ?></td>
                <td><?php echo $row['courseName']; ?></td>
                
				
			  
		
			
		<tr>
	
<?php
	  }
?>

		<div class="left">
		<a href="http://localhost/FinalProject/smain.php">Go back</a><div>
</table>

</h1>
</body>
</html>