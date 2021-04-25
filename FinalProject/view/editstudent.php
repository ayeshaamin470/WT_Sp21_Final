<?php
if (isset($_POST['go'])){
	$sname=$_POST["sname"];
	
setcookie('searchck', $sname, time() + (86400 * 30), "", "", false);
//header("Location: edit.php");
}
?>
<?php

include('../control/editstudentDB.php');
?>
<fieldset>
<legend><h1>*</h1></legend>
<form action="" method='post'>
<h1>Which user you want to edit?(insert username)</h1><br>
<input type="text" name='sname'>
<input name='go'type="submit" value="go">
</form>
<?php
     $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
		$sname="";
        $sid="";
        $sd="";
	    $sc="" ;
		

    //$uname=$_GET["uname"];
$searchu=$_COOKIE['searchck'];
    $sql = "SELECT * FROM student WHERE ID = '$searchu'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
        $sname=$row['Name'];
		$sid=$row['ID'];
		$sd=$row['DOB'];
		$sc=$row['Courses'];
      }
    }
    ?>
	
	<form action="" method='post'>
	<table>
	
      <tr class="form-group">
          <td><label>Name</label></td>
          <td>:<input type="text" name='name' value="<?php echo $sname; ?>"></td>
      </tr>
      <tr class="form-group">
          <td><label>ID</label></td>
          <td>:<input type="text" name='id' value="<?php echo $sid; ?>"></td>
      </tr>
      <tr class="form-group">
         <td> <label>DOB</label></td>
            <td>:<input type="text" name='dob'  value="<?php echo $sd; ?>"> </td></tr>
      <tr class="form-group">
      
         <td> <label>Courses</label></td>
          <td>:<input type="text" name='c' value="<?php echo $sc; ?>"></td>
      </tr>
      <tr>
      <td><input name='update' type="submit" value="Update"></td>
	  	  
	  </tr>
	  
	  <tr>
	  <td><a href="http://localhost/froms/view/showstudent.php">Go back</a></td>
	  </tr>
	  
	  </table>
    </form>

</body>
</html>