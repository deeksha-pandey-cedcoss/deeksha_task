<?php
// remove a task 
include "config.php";
$id=$_POST['id'];
$action=$_POST['action'];
switch($action)
{
    case "remove":
        {
            $data="DELETE FROM `task` WHERE `id`='$id'";
            $result=mysqli_query($connection,$data);    
            break;
        }
    case "removecompleted":
        {
            $sql="DELETE FROM `completed` WHERE `id`='$id'";
            $result=mysqli_query($connection,$sql);   
            break; 
        }
    case "removeallcompleted":
        {
            $sql="DELETE  FROM `completed` ";
            $result=mysqli_query($connection,$sql);   
            break;
        }   

}
?>