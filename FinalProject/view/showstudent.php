<html>
<head><style>
body {
  background-color: lightblue;
}

h1{
		padding-top: 10px;
  padding-right: 60px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 450px;
  top: 86px;
font-size: 20px;}

</style>
</head>
<body>
<h1>
<p><u>Students Information</u></p>
<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from student";
	 $result = mysqli_query($conn, $query);
		
?> 

<?php
 $sql = "SELECT * FROM student  WHERE ID = ID";
      $result = mysqli_query($conn, $sql);
	  ?>
<table border="1" style="border-collapse:collapse;">
<tr>
<th> Name</th>
<th> ID</th>
<th> DOB</th>
<th> Courses</th>
<th> Delete</th>
<th> Edit</th>
</tr>



<?php
      while($row = mysqli_fetch_assoc($result)){
		  ?>
			<tr>
			
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['DOB']; ?></td>
                <td><?php echo $row['Courses']; ?></td>
			  
			<td><a href='../control/deletestudentDB.php?id=<?php echo $row['ID']; ?>'>Delete</a></td>
			<td><a href='editstudent.php?id=<?php echo $row['ID']; ?>'>Edit</a></td>

			
                
		 
		
	
	  
		<tr>
<?php
	  }
?>
</table>
<div class="left">
		<a href="http://localhost/FinalProject/amain.php">Go back</a><div>
<br>
<button><a href="http://localhost/FinalProject/view/addstudents.php" type="button" class="btn btn-success">Add New +</a></button><br>
<button><a href="http://localhost/FinalProject/view/editstudent.php"type="button" class="btn btn-success">Edit</a></button>
</h1>
</body>
</html>