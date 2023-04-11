<?php
// update a task
include "config.php";
$name=$_POST['name'];
$id=$_POST['id'];
$data="UPDATE `task` SET `name` ='$name' where `id` ='$id'";
$sql_stmt = mysqli_query($connection,$data);

?>