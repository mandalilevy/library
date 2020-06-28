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
if (isset($_SESSION['admin'])) {
                  echo '<a style="color: white; font-family:Verdana;text-transform:uppercase" class="nav-link">'.$_SESSION['admin'].'</a>';
                    }


 ?>
      </li>
</ul>



    <ul class="navbar-nav  mt-lg-0 mx-auto">
     <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer;" class="nav-link" data-toggle="modal" data-target="#reset">RESET PASSWORD</a>
      </li>
     

    </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-family:Verdana"  href="adminlogout.php?logout">LOG OUT <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10px">
<div class="container jumbotron bg-light">
	
	<div class="container">
  <table class="table table-bordered">
    <tbody>
        <tr>
            <td data-toggle="modal" data-target="#exampleModal" style="color: blue; font-weight: bolder; cursor: pointer;">ADD NEW BOOK</td>
            <td style="color: blue; font-weight: bolder;"><a href="books.php" style="text-decoration: none;font-weight: bolder; color: blue">VIEW ALL BOOKS</a> </td>
            
        </tr>
        <tr>
            <td style="color: blue; font-weight: bolder;"> <a href="issue.php" style="text-decoration: none; font-weight: bolder; color: blue">ISSUE BOOK</a> </td>
            <td style="color: blue; font-weight: bolder;"> <a href="issued.php" style="text-decoration: none; font-weight: bolder; color: blue">ISSUED BOOKS</a> </td>
            
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
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">NEW BOOK</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">
                                    <label >Book Number</label>
                                    <input type="text" class="form-control" placeholder="book number" name="num" required="">
                                </div>
                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input type="text" class="form-control" placeholder="book name" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="cat" id="" class="form-control">
                                    	<option>Select Category</option>
                                    	<option>Business</option>
                                    	<option>Computer Science</option>
                                    	<option>Arts</option>
                                    	<option>Languages</option>
                                    	<option>Medicine</option>
                                    	<option>Medical</option>
                                    	<option>Economics</option>
                                    	
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="add">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>


<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","library");

$id=$_POST['num'];
$nm=$_POST['name'];
$ct=$_POST['cat'];
$dt=$_POST['date'];

$query ="SELECT * FROM `book` WHERE bno='".$_POST['num']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('BOOK ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `book`(`bno`, `bname`, `cat`, `date`)VALUES('$id','$nm','$ct','$dt')";
if(mysqli_query($con, $sql)){
}
}
}
 ?>


<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form action="cedit.php" method="post">
 <div class="form-group">
      <label style="font-weight: bold;">NEW PASSWORD</label>
      <input type="text" class="form-control" id="name" name="pssss">
    </div>
    <div class="form-group">
   <input type="submit" name="eka" class="btn btn-primary" value="Update Password">
     </div>
</form>
      </div>
     
    </div>
  </div>
</div>
<?php 
//session_start();
if (isset($_SESSION['admin'])) {
	if (isset($_POST['eka'])){
$con=mysqli_connect("127.0.0.1","root","","library");
$ps=$_POST['num'];
$qr ="UPDATE `register` SET `pass`='".$_POST['pssss']."' WHERE email = '".$_SESSION['admin']."'";
if ($con->query($qr) === TRUE) {
  header("Location: main.php");
}
}
}
 ?>


</body>
</html>