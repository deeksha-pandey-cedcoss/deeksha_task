<?php
// display incomplete todo
include "config.php";
$sql="SELECT * from `task` ORDER by `date`";
$result=mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo  "<div class='container'>
        <div class='row'>
   <input class='form-check-input me-1 check' type='checkbox' id='$row[id]' value= />
   <div class='col-sm'><input  type='textbox' class='inuttext$row[id]' id='name$row[id]' disabled value=".$row["name"]."></div>
    <div class='col-sm'><input  type='textbox' value=".$row["date"]." id='date$row[id]' disabled  /></div>
    <div class='col-sm'><button type='button' class='btn btn-danger p-2 remove' id='$row[id]'> Remove</button></div>
    
    <div class='col-sm'><button type='button' class='btn btn-info edit' id='".$row["id"]."'> Edit</button></div></div></div>";
    }
}

?>
