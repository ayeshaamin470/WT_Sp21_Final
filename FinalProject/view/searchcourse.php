<?php
if (isset($_POST['go'])){
	$sname=$_POST["sname"];
	
setcookie('searchck', $sname, time() + (86400 * 30), "", "", false);
header("Location: searchcourseDB.php");
//header("Location: view/editteacher.php");
}
?>
<form action="" method='post'>
<h1>Which course you want to search?(insert name)</h1><br>
<input type="text" name='sname'>
<input name='go'type="submit" value="search">
</form>