<?php

include "connect.php";

$aid = $_GET['aid'];

$sql = "DELETE FROM `album` WHERE ALID='$aid'";

$result = mysqli_query($conn, $sql);


if($result){
    echo "<script>alert('Reacord Deleted Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL = ./albumInsert.php">
    <?php
}
?>