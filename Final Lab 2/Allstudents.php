<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db_name="wt_sp21_l";
	
	
	   $conn = mysqli_connect($server,$user,$pass,$db_name);
		$query="select * from student";
		$result = mysqli_query($conn, $query);
	
		
?> 
<table border="1" style="border-collapse:collapse;">
<tr>
<th> Name</th>
<th> ID</th>
<th> DOB</th>
<th> Credit</th>
<th> Cgpa</th>
<th> dept_id</th>
<th> edit</th>
<th>delete</th>


<?php
      while($row = mysqli_fetch_assoc($result)){
			echo"<tr>";
		
			echo"<td>".$row["Name"]."</td>";
			echo"<td>".$row["ID"]."</td>";
			echo"<td>".$row["DOB"]."</td>";
			echo"<td>".$row["credit"]."</td>";
			echo"<td>".$row["cgpa"]."</td>";
			echo"<td>".$row["dept_id"]."</td>";
			echo"<td>".$row["edit"]."</td>";
			echo"<td>".$row["delete"]."</td>";
				echo"</tr>";
	  } 
		
?>
</table>