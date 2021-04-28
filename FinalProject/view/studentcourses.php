<html>
<head><style>
body {
  background-color: lightblue;
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
</style>
</head>
<body>

<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from course";
	 $result = mysqli_query($conn, $query);
		
?> 
<?php
 $sql = "SELECT * FROM course  WHERE CID = CID";
     $result = mysqli_query($conn, $sql);
	  ?>
	  <h1><p><u> Offered Courses:</u></p>
<table border="1" style="border-collapse:collapse;">

<tr>
<th> Name</th>
<th> CID</th>
<th> price</th>
<th> description</th>
<th> Enroll</th>

</tr>

<?php
      while($row = mysqli_fetch_assoc($result)){
		  ?>
			<tr>
			
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['CID']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['description']; ?></td>
				<td><a href='../control/enroll.php?id=<?php echo $row['CID']; ?>'>Enroll</a></td>
			  
		
			
                
		 
		
	
	  
		</tr>
		
<?php
	  }
?>


</table>
<div class="left">
		<a href="http://localhost/FinalProject/smain.php">Go back</a><div>
</h1>
</body>
</html>