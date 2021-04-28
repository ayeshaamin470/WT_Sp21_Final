<html>
<head>
 <title>Educare</title>
<style>
body {
  background-image: url("k.jpg");
  
}
.right {
  position: absolute;
  right: 0px;
  width: 200px;
    top: 50px;
}
.left{
  position: absolute;
  left: 60px;
  width: 200px;
    top: 50px;
}

.button {
  background-color: GREEN;
   border: none;
  color: white;
  padding: 13px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  left: 0px;
  
  
}
h1 {
  color: Crimson;
  text-align: LEFT;
  
} 
h2{ color: darkpink;
text-align: center;
border: 1.5px solid white;
  padding: 25px 50px 75px 100px;
   background-color: white;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}
h3 {
  position: absolute;
  left: 40px;
  top: 280px;
  
}
h5 {
  position: absolute;
  right: 90px;
  top: 280px;
  
}
h4{
  position: absolute;
  left: 980px;
  top: 150px;
  
}
h6{position: absolute;
left:445px;
top:170px;}

</style>
 
</head>
    <body>
	<h6><img src="BS.jpg" width="450" height="300"><h6>
	
	<h2><i>Welcom to Educare</i> <br></h2>
	<div class="right">
	<b><a href="control/logout.php">Log out</a></b> </div>
	
		<div class="left">
	<b><a href="http://localhost/FinalProject/view/signup.php">Sign Up</a></b> <br>
	<a href="http://localhost/FinalProject/view/courseprice.php">Search course price</a></div>
<p><i><ol><b>Build skills from courses</b></ol></i>
<i><ol><b>The expert in anything was onece a beginner</b></ol></i></p>
<h1><i><u>Choose your courses </u></i></h1>

<h4><?php
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
</form><h4>
<h3><a href="http://localhost/FinalProject/view/studentcourses.php" class="button">Available Courses</a>
<br>
<br>
<a href="http://localhost/FinalProject/view/showenroll.php" class="button">Enrolled Courses</a>
</h3>
<h5><a href="http://localhost/FinalProject/view/contact.php" class="button">Complain Box</a></h5>



    </body>
</html>