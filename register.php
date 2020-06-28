<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PIU LIBRARY</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
 <div class="signup-form">
    <form action="" method="post">
    <h2>Register</h2>
    <p class="hint-text">Register here to be a PIU Library Member</p>
        <div class="form-group">
    <div class="form-group">
      <lable>Full Name</lable>
          <input type="text" class="form-control" name="fname" placeholder="Full Name" required="required">
        </div>
        <div class="form-group">
          <lable>ID Number</lable>
          <input type="text" class="form-control" name="idn" placeholder="ID Number" required="required">
        </div>         
        </div>
    <div class="form-group">
      <lable>Create Your Password</lable>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>       
    <div class="form-group">
            <button type="submit" name="add" class="btn btn-success btn-lg btn-block">Register</button>
        </div>
    </form>
  <div class="text-center">Already have an account? <a href="home.php">Sign in</a></div>
</div>
<style type="text/css">
  body{
    color: #fff;
    background: purple;
    font-family: 'Roboto', sans-serif;
  }
    .form-control{
    height: 40px;
    box-shadow: none;
    color: #969fa4;
  }
  .form-control:focus{
    border-color: #5cb85c;
  }
    .form-control, .btn{        
        border-radius: 3px;
    }
  .signup-form{
    width: 400px;
    margin: 0 auto;
    padding: 30px 0;
  }
  .signup-form h2{
    color: #636363;
        margin: 0 0 15px;
    position: relative;
    text-align: center;
    }
  .signup-form h2:before, .signup-form h2:after{
    content: "";
    height: 2px;
    width: 30%;
    background: #d4d4d4;
    position: absolute;
    top: 50%;
    z-index: 2;
  } 
  .signup-form h2:before{
    left: 0;
  }
  .signup-form h2:after{
    right: 0;
  }
    .signup-form .hint-text{
    color: #999;
    margin-bottom: 30px;
    text-align: center;
  }
    .signup-form form{
    color: #999;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  .signup-form .form-group{
    margin-bottom: 20px;
  }
  .signup-form input[type="checkbox"]{
    margin-top: 3px;
  }
  .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;    
    min-width: 140px;
        outline: none !important;
    }
  .signup-form .row div:first-child{
    padding-right: 10px;
  }
  .signup-form .row div:last-child{
    padding-left: 10px;
  }     
    .signup-form a{
    color: #fff;
    text-decoration: underline;
  }
    .signup-form a:hover{
    text-decoration: none;
  }
  .signup-form form a{
    color: #5cb85c;
    text-decoration: none;
  } 
  .signup-form form a:hover{
    text-decoration: underline;
  }  
</style>
<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","library");

$nm=$_POST['fname'];
$id=$_POST['idn'];
$ps=$_POST['pass'];

$query ="SELECT * FROM `member` WHERE id='".$_POST['idn']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('YOU ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `member`(`name`, `id`, `pass`)VALUES('$nm','$id','$ps')";
if(mysqli_query($con, $sql)){
  header("Location: home.php");
}
}
}
 ?>






















</body>
</html>