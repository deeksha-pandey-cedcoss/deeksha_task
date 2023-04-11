<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Todo-List</title>
    <link rel="stylesheet" href="./CSS/style1.css">
</head>
<body>
<section>
  <div class="container py-2 h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: 1.75rem; background-color: #eff1f2;">
          <div class="card-body ">
            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
              <u>TODO</u>
</p>
<form class="d-flex justify-content-center align-items-center mb-4">
              <div class="form-outline flex-fill">
                <input type="text" id="form2" class="form-control py-3" placeholder="New Task"/>
              </div>
              <input type="date" id="date">
              <button type="button" class="btn btn-info mx-2 add" >Add</button>
            </form>
            <hr>
            <div class="container h-100 p-0 mx-0">
               <div class="taskaddded"></div> 


            </div>
</section>
</body>
<script src="./js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>