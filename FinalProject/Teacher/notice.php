<?php 
    include 'header.php'; 
?>

<div id="noticein" style="text-align:center;">
    <h2>Publish Notice</h2>

<?php
    include 'config.php';

    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM studentinfo WHERE id = '{$stu_id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>

    <form class="post-form" action="editnotice.php" method="post" onsubmit="return validate()">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </div>
      <div class="form-group">
          <label>Publish Notice</label>
          <input type="text" id="notice" name="notice" value="<?php echo $row['notice']; ?>"/>
      </div><span id="js_notice"></span>
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
			get("noticein").style.display="block";
		}
		function viewGoogleReg(){
			get("noticein").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("notice").value == ""){
				get("js_notice").innerHTML="Text Field Is Blank";
				get("js_notice").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_notice").innerHTML = "";
		}
	</script>
</html>