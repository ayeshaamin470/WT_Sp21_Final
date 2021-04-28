<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method = "post" enctype = "multipart/form-data">
<label>Title</label>
<input type="text" name="title">
<label>File Upload</label>
<input type="File" name="file">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
      
	  $host = "localhost";
	  $user = "root";
	  $pwd = "";
	  $db= "teacher";
	  $conn = mysqli_connect($host,$user,$pwd,$db);
		
		
		if (isset($_POST['submit'])) {
			
			$title= $_POST["title"];
			$pname= rand(1000,10000)."-".$_FILES["file"]["name"];
			//$tname=$_FILES["files"]["tmp_name"];
			$uploads_dir='/files';
			move_uploaded_file($tname,$uploads_dir.'/'.$pname);
			$sql="INSERT into fileup(title,image) VALUES('$title','$pname')";
			
			if(mysqli_query($conn,$sql)){
		echo "Inserted";
	}else{
		echo "Problem";
	}
			
			
		}
		
		//header("http://localhost/sis/upload.php");
	  
	  
	  
?>