<?php 
    include 'header.php'; 
?>

<div id="assignmentin" style="text-align:center;">
    <h2>Offer Assignment</h2>

<?php
    include 'config.php';

    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM studentinfo WHERE id = '{$stu_id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>

    <form class="post-form" action="editassignment.php" method="post" onsubmit="return validate()">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </div>
      <div class="form-group">
          <label>Offer Assignment</label>
          <input type="text" id="assignment" name="assignment" value="<?php echo $row['assignment']; ?>"/>
      </div><span id="js_assignment"></span>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
    <script>
		function get(id){
			return document.getElementById(id);
		}
		function viewNormalReg(){
			get("assignmentin").style.display="block";
		}
		function viewGoogleReg(){
			get("assignmentin").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("assignment").value == ""){
				get("js_assignment").innerHTML="Text Field Is Blank";
				get("js_assignment").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_assignment").innerHTML = "";
		}
	</script>
</html>