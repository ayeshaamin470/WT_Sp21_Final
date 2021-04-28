
<?php

include('../control/editteacherDB.php');
?>

<fieldset>
<legend><h1>Edit*</h1></legend>
<?php
    $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
		$tname="";
        $tid="";
        $tcourse="";
	    $tdept="" ;
		

    //$uname=$_GET["uname"];
	$id = $_GET['id'];
    $sql = "SELECT * FROM teacher WHERE tid = '$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
        $tname=$row['name'];
		$tid=$row['tid'];
		$tcourse=$row['course'];
		$tdept=$row['department'];
		
      }
    }
    ?>
	
	<form action="" method='post'>
	<table>
	
      <tr class="form-group">
          <td><label>Name</label></td>
          <td>:<input type="text" name='name' value="<?php echo $tname; ?>"></td>
      </tr>
      <tr class="form-group">
          <td><label>TID</label></td>
          <td>:<input type="text" name='id' value="<?php echo $tid; ?>"></td>
      </tr>
      <tr class="form-group">
         <td> <label>Course</label></td>
            <td>:<input type="text" name='course' value="<?php echo $tcourse; ?>"> </td></tr>
      <tr class="form-group">
      
         <td> <label>Department</label></td>
          <td>:<input type="text" name='dept' value="<?php echo $tdept; ?>"></td>
      </tr>
      <tr>
      <td><input name='update' type="submit" value="Update"></td>
	  	  
	  </tr>
	  
	  <tr>
	  <td><a href="http://localhost/FinalProject/view/showteacher.php">Go back</a></td>
	  </tr>
	  
	  </table>
    </form>

</body>
</html>