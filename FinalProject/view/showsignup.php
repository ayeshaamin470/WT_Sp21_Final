<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from signup";
	 $result = mysqli_query($conn, $query);
		
?> 
<table border="1" style="border-collapse:collapse;">
<tr>
<th> fname</th>
<th> lname</th>
<th> username</th>
<th> password</th>
<th> email</th>
<th> phone number</th>
<th> DOB</th>
</tr>
<?php
      while($row = mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo"<td>".$row["fname"]."</td>";
			echo"<td>".$row["lname"]."</td>";
		echo"<td>".$row["username"]."</td>";
			echo"<td>".$row["password"]."</td>";
			echo"<td>".$row["email"]."</td>";
			echo"<td>".$row["phone number"]."</td>";
			echo"<td>".$row["dob"]."</td>";
				
	  echo"</tr>";}
	  
		
?>
</table>