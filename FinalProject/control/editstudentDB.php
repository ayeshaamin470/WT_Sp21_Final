 <?php
if (isset($_POST['update']))   {
       $name=$_POST["name"];
		$id=$_POST["id"];
		$search=$_COOKIE['searchck'];
		$dob=$_POST["dob"];
		$c=$_POST["c"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		//$query="insert into signup values ('$fname','$lname','$uname','$pass','$email','$p','$dob')";
		$query="UPDATE student SET Name='$name', ID='$id', DOB='$dob', Courses='$c' WHERE ID = '$search'";
		//$result = mysqli_query($conn, $query);
		if(mysqli_query($conn,$query)){
			echo "Student info updated";
		}
		else{
			echo "Can not update info";
		}
 }
   
	?>