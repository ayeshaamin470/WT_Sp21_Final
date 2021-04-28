<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="froms";
	
	
	 $conn = mysqli_connect($server,$user,$pass,$db);
     $query="select * from enroll";
	 $result = mysqli_query($conn, $query);
		
?> 
<center><table border="1" style="border-collapse:collapse;">
<tr>
<th> StudentName</th>
<th> StudentID</th>
<th> CourseID</th>
<th> CourseName</th>
</tr>
<?php
      while($row = mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo"<td>".$row["studentName"]."</td>";
		
			echo"<td>".$row["studentID"]."</td>";
			echo"<td>".$row["courseID"]."</td>";
			echo"<td>".$row["courseName"]."</td>";
				
	  echo"</tr>";}
	  
		
?>
</table></center>