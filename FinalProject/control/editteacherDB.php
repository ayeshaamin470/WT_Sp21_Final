 <?php
if (isset($_POST['update']))   {
        $name=$_POST["name"];
		$id=$_POST["id"];
		$search=$_COOKIE['tsearchck'];
		$course=$_POST["course"];
		$dept=$_POST["dept"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		//$query="insert into signup values ('$fname','$lname','$uname','$pass','$email','$p','$dob')";
		$query="UPDATE teacher SET name='$name', tid='$id', course='$course', department='$dept' WHERE tid = '$search'";
		//$result = mysqli_query($conn, $query);
		if(mysqli_query($conn,$query)){
			echo "Teacher info updated";
		}
		else{
			echo "Can not update info ";
		}
 }
   
	?>