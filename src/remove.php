<?php
include "config.php";
$id=$_POST['id'];
$data="DELETE FROM `task` WHERE `id`='$id'";
$result=mysqli_query($connection,$data);

?>