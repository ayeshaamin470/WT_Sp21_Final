<?php
    $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
		$firstname="";
		$lastname="";
		$username="";
		$password="";
		$emaile="";
		$pn="";
		$date="";
		
	$searchu=$_COOKIE['searchck'];
    $sql = "SELECT * FROM course WHERE Name= '$searchu'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
		
		echo "<table><tr><th>Name</th><th>CID</th><th>price</th><th>description</th></tr>";
      while($row = mysqli_fetch_assoc($result)){
       echo "<tr><td>".$row["Name"]."</td><td>".$row["CID"]."</td><td>".$row["price"]."</td><td>".$row["description"]."</td></tr>";
      }
	  echo "</table>";
    }
    ?>
	  <a href="http://localhost/FinalProject/amain.php">
	  Go back</a>
	
    </form>
</div>
</div>
</body>
</html>