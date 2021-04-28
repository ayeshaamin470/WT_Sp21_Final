<?php
$stu_id = $_POST['id'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_cgpa = $_POST['cgpa'];
$stu_ongoing = $_POST['ongoingcourse'];
$stu_finished = $_POST['finishedcourse'];
$stu_notice = $_POST['notice'];
$stu_assignment = $_POST['assignment'];
$stu_exam = $_POST['exam'];
$stu_mark = $_POST['mark'];

include 'config.php';

$sql = "UPDATE studentinfo SET sname = '{$stu_name}', saddress = '{$stu_address}', class = '{$stu_class}', cgpa = '{$stu_cgpa}', ongoingcourse = '{$stu_ongoing}', finishedcourse = '{$stu_finished}', notice = '{$stu_notice}', assignment = '{$stu_assignment}', exam = '{$stu_exam}', mark = '{$stu_mark}' WHERE id = '{$stu_id}'";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost/FinalProject/Teacher/teachersection.php");

?>