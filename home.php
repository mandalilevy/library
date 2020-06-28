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
 <div class="login-form">
    <form action="" method="post">
    <div class="avatar">
      <img src="img/PIU-LOGO.jpg" alt="Avatar">
    </div>
        <h2 class="text-center">PIU Library Member Login</h2>   
        <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="ID Number" required="required">
        </div>
    <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" name="add" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
    </form>
    <p class="text-center small">New Member? <a href="register.php">Sign up here!</a></p>
</div>
<style type="text/css">
  body {
    color: #fff;
    background: purple;
  }
  .form-control {
        min-height: 41px;
    background: #fff;
    box-shadow: none !important;
    border-color: #e3e3e3;
  }
  .form-control:focus {
    border-color: #70c5c0;
  }
    .form-control, .btn {        
        border-radius: 2px;
    }
  .login-form {
    width: 350px;
    margin: 0 auto;
    padding: 100px 0 30px;    
  }
  .login-form form {
    color: #7a7a7a;
    border-radius: 2px;
      margin-bottom: 15px;
        font-size: 13px;
        background: #d4d4d4;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;  
        position: relative; 
    }
  .login-form h2 {
    font-size: 22px;
        margin: 35px 0 25px;
    }
  .login-form .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -50px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: white;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
  .login-form .avatar img {
    width: 100%;

  } 
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
    background: #70c5c0;
    border: none;
    margin-bottom: 20px;
    }
  .login-form .btn:hover, .login-form .btn:focus {
    background: #50b8b3;
        outline: none !important;
  }    
  .login-form a {
    color: #fff;
    text-decoration: underline;
  }
  .login-form a:hover {
    text-decoration: none;
  }
  .login-form form a {
    color: #7a7a7a;
    text-decoration: none;
  }
  .login-form form a:hover {
    text-decoration: underline;
  }
</style>
<?php
session_start();
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","library");

$name=$_POST['email'];
$query ="SELECT * FROM `member` WHERE id='".$_POST['email']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $_SESSION['user']=$_POST['email'];
  header("Location:dash.php"); 
}
else{
echo "<script type='text/javascript'>alert('USER DOES NOT EXIST!!');</script>";
}
}

 ?>



</body>
</html>