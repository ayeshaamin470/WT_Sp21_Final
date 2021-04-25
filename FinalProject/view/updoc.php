<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method = "post" enctype = "multipart/form-data">
	<fieldset>
	  
<legend><h1>Upload documents :</h1></legend>
<table>

<tr>
<td><span>Title</span></td>
<td><input type="text" name="title"></td>
</tr>

<tr>
<td><span>File upload</span></td>
<td><input type="File" name="file"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
      
        $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
		
		
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