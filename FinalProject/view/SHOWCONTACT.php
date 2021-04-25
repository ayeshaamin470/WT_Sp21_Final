<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from contact";
	 $result = mysqli_query($conn, $query);
		
?> 
<table border="1" style="border-collapse:collapse;">
<tr>
<th> name</th>
<th> email</th>
<th> phone number</th>
<th> subject</th>
</tr>
<?php
      while($row = mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo"<td>".$row["Name"]."</td>";
		
			echo"<td>".$row["Email"]."</td>";
			echo"<td>".$row["Phone_no"]."</td>";
			echo"<td>".$row["Subject"]."</td>";
				
	  echo"</tr>";}
	  
		
?>
</table>