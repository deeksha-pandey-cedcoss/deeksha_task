<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<?php
include "config.php";
$sql="SELECT * from `task`";
$result=mysqli_query($connection,$sql);
$str="";
if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {
        $str.= "<div class='container'>
        <div class='row'>
    
   <input class='form-check-input me-1' type='checkbox' value= />
   <div class='col-sm'><input  type='textbox' disabled value=".$row["name"]."></div>
    <div class='col-sm'><input  type='textbox' value=".$row["date"]." disabled  /></div>
    <div class='col-sm'><button type='button' class='btn btn-danger p-2 remove' id='".$row["id"]."'> Remove</button></div>
    <div class='col-sm'><button type='button' class='btn btn-info edit' id='".$row["id"]."'> Edit</button></div></div></div>";
    }
}
 echo $str; 


?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>