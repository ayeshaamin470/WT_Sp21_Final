<?php
    $s_id = $_GET['id'];
    include('config.php'); 

    $sql = "DELETE FROM studentinfo WHERE id = '{$s_id}'";
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/FinalProject/Teacher/teachersection.php");

?>
