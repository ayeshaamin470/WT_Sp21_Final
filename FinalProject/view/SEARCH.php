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
    $sql = "SELECT * FROM teacher WHERE tid= '$searchu'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
		
		echo "<table><tr><th>name</th><th>teacherid</th><th>course</th><th>department</th></tr>";
      while($row = mysqli_fetch_assoc($result)){
       echo "<tr><td>".$row["name"]."</td><td>".$row["tid"]."</td><td>".$row["course"]."</td><td>".$row["department"]."</td></tr>";
      }
	  echo "</table>";
    }
    ?>
	  <a href="searchtool.php">
	  Go back</a>
	
    </form>
</div>
</div>
</body>
</html>