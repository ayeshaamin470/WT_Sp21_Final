 <?php
if (isset($_POST['update']))   {
        $name=$_POST["name"];
		$id=$_POST["id"];
		$search=$_COOKIE['Csearchck'];
		$p=$_POST["p"];
		$d=$_POST["subject"];
		$server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
			//$conn = mysqli_connect("localhost","root","","froms");
		//$query="insert into signup values ('$fname','$lname','$uname','$pass','$email','$p','$dob')";
		$query="UPDATE course SET Name='$name', CID='$id', price='$p', description='$d' WHERE CID = '$search'";
		//$result = mysqli_query($conn, $query);
		if(mysqli_query($conn,$query)){
			echo "Course info updated";
		}
		else{
			echo "Can not update info";
		}
 }
   
	?>