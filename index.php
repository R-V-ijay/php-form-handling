<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <style>

    span{
 
        color:red;
    }

    </style>
</head>
<body>

<?php

$nameErr = $placeErr = "";
$name = $place = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST['name'])) {
        $nameErr = "This field is required";
    }else{
        $name = $_POST['name'];
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST['place'])) {
        $placeErr = "This field is required";
    }else{
        $place = $_POST['place'];
    }
}
?>



<div class="container mt-5">
<form auto_complete="off"  method="POST" action="<?= $_SERVER['PHP_SELF']?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label><span class="mg">* <?= $nameErr ?></span>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place</label><span class="mg">* <?= $placeErr ?></span>
    <input type="text" class="form-control" id="exampleInputPassword1" name="place">
  </div>

  <input type="submit" class="btn btn-primary" value="submit">
</form>
<?php
        echo $name."<br>";
        echo $place;
   
?>
</div>

    
</body>
</html>
