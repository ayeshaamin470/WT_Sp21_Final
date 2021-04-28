<?php
$stu_id = $_POST['id'];
$stu_mark = $_POST['mark'];

include 'config.php';

$sql = "UPDATE studentinfo SET mark = '{$stu_mark}' WHERE id = '{$stu_id}'";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost/FinalProject/Teacher/teachersection.php");
?>