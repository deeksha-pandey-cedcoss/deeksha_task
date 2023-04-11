<?php

include "config.php";
$name=$_POST['name'];
$date=$_POST['date'];

$data="INSERT INTO `task`(`name`, `date`, `status`) VALUES ('$name','$date','active')";
$result=mysqli_query($connection,$data);




?>
<script src="./js/script.js"></script>