<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PIU LIBRARY</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
	<div class="container">   
  <div class="jumbotron">  
<form action="" method="post">
 <div class="form-group">
      <label style="font-weight: bold;">NEW PASSWORD</label>
      <input type="text" class="form-control" id="name" name="num">
    </div>
    <div class="form-group">
      <input type="submit" name="add" class="btn btn-primary" value="Update Password">
     
     </div>
</form>
</div>  
  </div>      
<?php 
session_start();
if (isset($_SESSION['user'])) {
	if (isset($_POST['add'])){
$con=mysqli_connect("127.0.0.1","root","","library");
$ps=$_POST['num'];
$qr ="UPDATE `member` SET `pass`='".$_POST['num']."' WHERE id = '".$_SESSION['user']."'";
if ($con->query($qr) === TRUE) {
  header("Location: dash.php");
}
}
}
 ?>
</body>
</html>