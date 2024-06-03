<?php
include "connection.php";
include "assests/php_code/scource_code.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container p-4">
    <div class="row">
        <div class="col">
            <a href="users.php" class="btn btn-dark">Back</a>
        </div>
        <center>
        <div class="col text-none">
            <h4>Update the record of: <strong><?php echo $first_name;?>!</strong></a> <br><br><br>
        </div>
</center>
    </div>
    <div class="row">
  <div class="col-sm-8 mb-5 mb-sm-0">
    <div class="card">
      <div class="card-body">
         <form action="" method="POST">

         <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">First Name</span>
            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $first_name;?>" aria-label="Username" aria-describedby="basic-addon1">
            
</div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Last Name</span>
            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $last_name; ?>" aria-label="Username" aria-describedby="basic-addon1">
            
</div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" aria-label="Username" aria-describedby="basic-addon1">
            
</div>


        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="text" class="form-control" name="password" id="password" value="<?php echo $password; ?>" aria-label="Username" aria-describedby="basic-addon1">

 
            <br>
            <input type="submit" name="btnupdate" class="btn btn-dark" value="UPDATE"/>
            <input type="submit" name="btndelete" class="btn btn-danger" value="DELETE"/>
            <input type="submit" name="btnback" class="btn btn-dark" value="BACK"/>
         </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>