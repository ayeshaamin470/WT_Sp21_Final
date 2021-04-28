<html>
<head>
 <title>Educare</title>
<style>
body {
  background-image: url("k.jpg");
  
}
.button {
  background-color: purple;
  border: none;
  color: white;
  padding: 13px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  left: 40px;
 
top: 50px;
}
  
.right {
  position: absolute;
  right: 0px;
  width: 200px;
    top: 50px;
}


.left {
  position: absolute;
  left: 45px;
  width: 220px;
    top: 50px;
}
h4{
  color: darkblue;
 font-size: 26px;
  position: absolute;
  left: 60px;
  top: 340px;
}
h5{
  position: absolute;
  left: 45px;
  width: 200px;
    top: 50px;
	font-size: 15px;
}


p{
  color: darkblue;
 font-size: 26px;
  position: absolute;
  left: 60px;
  top: 300px;
 
  
} 
h2{ color: darkpink;
text-align: center;
border: 1.5px solid white;
  padding: 25px 50px 75px 100px;
   background-color: white;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}
h1{
  position: absolute;
  left: 63px;
  top: 230px;
  
}
h3{
  position: absolute;
  left: 650px;
  top: 180px;
  
}
h6{
  position: absolute;
  left: 850px;
  top: 120px;
  
}

</style>
 
</head>
    <body>
	
	<h2><i>Welcom to Educare</i> <br></h2>
	<div class="right">
	<b><a href="http://localhost/FinalProject/main.php">Go Back</a></b> <br>
	<b><a href="http://localhost/FinalProject/view/showenrolladmin.php">Enrollment</a></b> 
	</div>
	

		<div class="left">
	<b><a href="http://localhost/FinalProject/view/SHOWCONTACT.php">See Complains</a></b></div>
	<h5><b><a href="view/updoc.php" >Upload</b></a></p>
	</h5>
	<i><ol><b>Build skills from courses</b></ol></i>
<i><ol><b>The expert in anything was onece a beginner</b></ol></i>
<h1><?php
if (isset($_POST['go'])){
	$sname=$_POST["sname"];
	
setcookie('searchck', $sname, time() + (86400 * 30), "", "", false);
header("Location: control/searchcourseDB.php");
//header("Location: view/editteacher.php");
}
?>
<form action="" method='post'>

<input type="text" name='sname'>
<input name='go'type="submit" value="search">
</form></h1>
	<p>
	<b><a href="http://localhost/FinalProject/view/showstudent.php" class= "button">See all Students</b></a>
	
	<b><a href="http://localhost/FinalProject/view/showteacher.php" class= "button">See all Teachers</b></a>
	<b><a href="http://localhost/FinalProject/view/showcourse.php" class= "button">See all Courses</b></a></p>
	<h6><a href="http://localhost/FinalProject/view/showsignup.php">student signup</a></h6>

<h3><img src="main.jpg" width="500" height="350"></h3>
    </body>
</html>