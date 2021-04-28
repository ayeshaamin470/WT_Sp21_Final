<?php
$stu_id = $_POST['id'];
$stu_assignment = $_POST['assignment'];

include 'config.php';

$sql = "UPDATE studentinfo SET assignment = '{$stu_assignment}' WHERE id = '{$stu_id}'";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost/FinalProject/Teacher/teachersection.php");
?>