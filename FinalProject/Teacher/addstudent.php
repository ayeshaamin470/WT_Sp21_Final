<?php
if (isset($_REQUEST['submit'])){
	

 include('config.php'); 

 $s_id = $_POST['id'];
 $s_name = $_POST['name'];
 $s_address = $_POST['address'];
 $s_class = $_POST['class'];
 $s_cgpa = $_POST['cgpa'];
 $s_oncourse = $_POST['ongoingcourse'];
 $s_fcourse = $_POST['finishedcourse'];
 $s_notice = $_POST['notice'];
 $s_assignment = $_POST['assignment'];
 $s_exam = $_POST['exam'];
 $s_mark = $_POST['mark'];

$sql = "INSERT INTO studentinfo (id, sname, saddress, class, cgpa, ongoingcourse, finishedcourse, notice, assignment, exam, mark) VALUES ('{$s_id}','{$s_name}','{$s_address}','{$s_class}','{$s_cgpa}','{$s_oncourse}','{$s_fcourse}','{$s_notice}','{$s_assignment}','{$s_exam}','{$s_mark}')";
$result = mysqli_query($conn, $sql);


header("http://localhost/FinalProject/Teacher/teachersection.php");
}
?>
