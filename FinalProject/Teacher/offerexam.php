<?php 
    include 'header.php'; 
?>

<div id="examin" style="text-align:center;">
    <h2>Offer Exam</h2>

<?php
    include 'config.php';

    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM studentinfo WHERE id = '{$stu_id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>

    <form class="post-form" action="editexam.php" method="post" onsubmit="return validate()">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </div>
      <div class="form-group">
          <label>Offer Exam</label>
          <input type="text" id="exam" name="exam" value="<?php echo $row['exam']; ?>"/>
      </div><span id="js_exam"></span>
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
			get("examin").style.display="block";
		}
		function viewGoogleReg(){
			get("examin").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("exam").value == ""){
				get("js_exam").innerHTML="Text Field Is Blank";
				get("js_exam").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_exam").innerHTML = "";
		}
	</script>
</html>