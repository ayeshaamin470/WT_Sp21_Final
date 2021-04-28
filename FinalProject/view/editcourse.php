
<?php

include('../control/editcourseDB.php');
?>


<?php
    $server="localhost";
	    $user="root";
	    $password="";
	    $db="froms";
	    $conn = mysqli_connect($server,$user,$password,$db);
		$cname="";
        $cid="";
        $cp="";
	    $cd= "";;
		
    $id = $_GET['id'];
    //$uname=$_GET["uname"];
	//$searchu=$_COOKIE['Csearchck'];
    $sql = "SELECT * FROM course WHERE CID = '$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
        $cname=$row['Name'];
		$cid=$row['CID'];
		$cp=$row['price'];
		$cd=$row['description'];
		
      }
    }
    ?>
	
	<form action="" method='post'>
	
	<table>
	
      <tr class="form-group">
          <td><label>Name</label></td>
          <td>:<input type="text" name='name' value="<?php echo $cname; ?>"></td>
      </tr>
      <tr class="form-group">
          <td><label>CID</label></td>
          <td>:<input type="text" name='id' value="<?php echo $cid; ?>"></td>
      </tr>
      <tr class="form-group">
         <td> <label>price</label></td>
            <td>:<input type="text" name='p' value="<?php echo $cp; ?>"> </td></tr>
      <tr class="form-group">
      
         <td> <label>description</label></td>
          <td>:<input type="text" name='subject' value="<?php echo $cd; ?>"></td>
      </tr>
      <tr>
      <td><input name='update' type="submit" value="Update"></td>
	  	  
	  </tr>
	  
	  <tr>
	  <td><a href="http://localhost/FinalProject/view/showcourse.php">Go back</a></td>
	  </tr>
	  
	  </table>
    </form>

</body>
</html>