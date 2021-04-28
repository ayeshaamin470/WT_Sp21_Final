<?php 
    include 'header.php'; 
?>

<div style="text-align:center;">
    <h2>Update Record</h2>

<?php
    include 'config.php';

    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM studentinfo WHERE id = '{$stu_id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>

    <form class="post-form" action="editdata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <label>Class</label>
            <input type="text" name="class" value="<?php echo $row['class']; ?>"/> <<<1=BCA, 2=BSC, 3=BCOM, 4=BTECH>>>
      </div>
      <div class="form-group">
          <label>CGPA</label>
          <input type="text" name="cgpa" value="<?php echo $row['cgpa']; ?>"/>
      </div>
      <div class="form-group">
          <label>OnGoing Course</label>
          <input type="text" name="ongoingcourse" value="<?php echo $row['ongoingcourse']; ?>"/>
      </div>
      <div class="form-group">
          <label>Finished Course</label>
          <input type="text" name="finishedcourse" value="<?php echo $row['finishedcourse']; ?>"/>
      </div>
      <div class="form-group">
          <label>Notice For Student</label>
          <input type="text" name="notice" value="<?php echo $row['notice']; ?>"/>
      </div>
      <div class="form-group">
          <label>Offer Assignment</label>
          <input type="text" name="assignment" value="<?php echo $row['assignment']; ?>"/>
      </div>
      <div class="form-group">
          <label>Offer Exam</label>
          <input type="text" name="exam" value="<?php echo $row['exam']; ?>"/>
      </div>
      <div class="form-group">
          <label>Exam Mark</label>
          <input type="text" name="mark" value="<?php echo $row['mark']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>