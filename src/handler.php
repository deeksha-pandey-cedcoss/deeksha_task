<?php
// handler of addition of task
include "config.php";
$name=$_POST['name'];
$date=$_POST['date'];
$id=$_POST['id'];
$action=$_POST['action'];
switch($action)
{
    case "addtask":
        {
            $data="INSERT INTO `task`(`name`, `date`, `status`) VALUES ('$name','$date','active')";
            $result=mysqli_query($connection,$data);    
            break;
        }
    case "addcompleted":
        {

            $data="INSERT INTO `completed`(`name`, `date`, `status`) VALUES ('$name','$date','completed')";
            $result=mysqli_query($connection,$data); 
            $sql="DELETE FROM `task` WHERE `id`='$id'";
            $result=mysqli_query($connection,$sql);   
            break;

        }
    
}





?>
