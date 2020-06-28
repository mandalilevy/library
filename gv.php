<?php

$con=mysqli_connect("127.0.0.1","root","","library");
$ch ="SELECT * FROM `issued` WHERE bno='".$_POST['bnum']."'";
//$jibu=mysqli_query($con,$ch);
if ($con->query($ch) === TRUE) {
  echo "<script type='text/javascript'>alert('BOOK ALREADY ISSUED!!');</script>";
 //header("Location: borrow.php");
}
else{
$qr ="INSERT INTO `issued`(`borower`, `bno`, `bname`, `cat`, `db`, `dr`) VALUES ('".$_POST['bo']."','".$_POST['bnum']."','".$_POST['bname']."','".$_POST['cat']."','".$_POST['db']."','".$_POST['dr']."')";
//$result=mysqli_query($con,$qr);
if ($con->query($qr) === TRUE) {
  header("Location: main.php");
}


}


 ?>