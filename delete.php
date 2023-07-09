<?php

include "connect.php";

$sid = $_GET['sid'];

$sql = "DELETE FROM `song` WHERE S_ID='$sid'";

$result = mysqli_query($conn, $sql);


if($result){
    echo "<script>alert('Reacord Deleted Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL = ./admin.php">
    <?php
}
?>