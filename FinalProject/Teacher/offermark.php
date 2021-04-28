<?php 
    include 'header.php'; 
?>

<div id="markin" style="text-align:center;">
    <h2>Upload Mark</h2>

<?php
    include 'config.php';

    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM studentinfo WHERE id = '{$stu_id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>

    <form class="post-form" action="editmark.php" method="post" onsubmit="return validate()">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </div>
      <div class="form-group">
          <label>Upload Mark</label>
          <input type="text" id="mark" name="mark" value="<?php echo $row['mark']; ?>"/>
      </div><span id="js_mark"></span>
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
			get("markin").style.display="block";
		}
		function viewGoogleReg(){
			get("markin").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("mark").value == ""){
				get("js_mark").innerHTML="Text Field Is Blank";
				get("js_mark").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_mark").innerHTML = "";
		}
	</script>
</html>