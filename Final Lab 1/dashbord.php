<?php

/*session start ();*/

if(!isset($_COOKIE["username"]))
 { 
	 header ("Location:cookie.php");

 }

?>



<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>username:<?php echo $_COOKIE["username"]; ?></h1>


</body>
</html>