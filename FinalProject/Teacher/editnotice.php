<?php
$stu_id = $_POST['id'];
$stu_notice = $_POST['notice'];

include 'config.php';

$sql = "UPDATE studentinfo SET notice = '{$stu_notice}' WHERE id = '{$stu_id}'";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost/FinalProject/Teacher/teachersection.php");
?>