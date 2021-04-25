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
<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from teacher";
	 $result = mysqli_query($conn, $query);
		
?> 
<h1><p> Teachers infotmation:</p>
<?php
 $sql = "SELECT * FROM teacher  WHERE TID = TID";
      $result = mysqli_query($conn, $sql);
	  ?>
<table border="1" style="border-collapse:collapse;">
<tr>
<th> Name</th>
<th> TID</th>
<th> Course</th>
<th> Department</th>
<th> Delete</th>
</tr>


<?php
      while($row = mysqli_fetch_assoc($result)){
		  ?>
			<tr>
			
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['tid']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['department']; ?></td>
			  
			<td><a href='../control/deleteteacherDB.php?id=<?php echo $row['tid']; ?>'>Delete</a></td>
			
                
		 
		
	
	  
		<tr>
<?php
	  }
?>
</table>
<br>
<a href="http://localhost/froms/view/addteacher.php" class="button">Add New +</a><br>
<a href="http://localhost/froms/view/editteacher.php" class="button">Edit</a>
</h1>
</body>
</html>