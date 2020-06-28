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
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: purple">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['user'])) {
                  echo '<a style="color: white; font-family:Verdana;text-transform:uppercase" class="nav-link">'.$_SESSION['user'].'</a>';
                    }


 ?>
      </li>
</ul>



    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer;" class="nav-link" data-toggle="modal" data-target="#exampleModal">RESET PASSWORD</a>
      </li>
  </ul>
   <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-family:Verdana"  href="logout.php?logout">LOG OUT <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10px">
<div class="container jumbotron bg-light">
	

	<div class="container w-25 p-3 ">
  <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="color: blue; font-weight: bolder; cursor: pointer;"><a href="borrow.php" style="text-decoration: none;">BORROW A BOOK</a></td>
            
            
        </tr>
        <tr>
        	<td style="color: blue; font-weight: bolder;"><a href="mybooks.php" style="text-decoration: none;">MY BOOKS</a> </td>
        </tr>          
    </tbody>
</table>
</div>
</div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
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
  </div>
</div>
<?php 

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