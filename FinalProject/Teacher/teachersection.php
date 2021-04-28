<?php
include 'header.php';
?>
<div>
    <h2 style="text-align:center;">All Information</h2>
    <?php
      include 'config.php';
      $sql = "SELECT * FROM studentinfo";
      $result = mysqli_query($conn, $sql);
    ?>
    <table cellpadding="10px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>CGPA</th>
        <th>OnGoing Courses</th>
        <th>Finished Courses</th>
        <th>Notice For Student</th>
        <th>Offerd Assignment</th>
        <th>Offered Exam</th>
        <th>Exam Mark</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['cgpa']; ?></td>
                <td><?php echo $row['ongoingcourse']; ?></td>
                <td><?php echo $row['finishedcourse']; ?></td>
                <td><?php echo $row['notice']; ?></td>
                <td><?php echo $row['assignment']; ?></td>
                <td><?php echo $row['exam']; ?></td>
                <td><?php echo $row['mark']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
                    <a href='offerassignment.php?id=<?php echo $row['id']; ?>'>Offer Assignment</a>
                    <a href='notice.php?id=<?php echo $row['id']; ?>'>Notice</a>
                    <a href='offerexam.php?id=<?php echo $row['id']; ?>'>Offer Exam</a>
                    <a href='offermark.php?id=<?php echo $row['id']; ?>'>Upload Mark</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>