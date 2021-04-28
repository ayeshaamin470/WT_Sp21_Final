<?php
$stu_id = $_POST['id'];
$stu_exam = $_POST['exam'];

include 'config.php';

$sql = "UPDATE studentinfo SET exam = '{$stu_exam}' WHERE id = '{$stu_id}'";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost/FinalProject/Teacher/teachersection.php");
?>