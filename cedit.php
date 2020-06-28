<?php 
session_start();
if (isset($_SESSION['admin'])) {
$con=mysqli_connect("127.0.0.1","root","","library");
$ps=$_POST['num'];
$qr ="UPDATE `register` SET `pass`='".$_POST['pssss']."' WHERE email = '".$_SESSION['admin']."'";

if ($con->query($qr) === TRUE) {
  header("Location: main.php");
}
}

 ?>