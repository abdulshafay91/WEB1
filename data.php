<?php
$conn=mysqli_connect("localhost","root","","fit-fussion");
$name=$_REQUEST['user'];
$no=$_REQUEST['p-num']; 
$mail=$_REQUEST['e-mail'];
$pass=$_REQUEST['pass'];
$q="INSERT INTO `sing` ( `username`, `p-number`, `E-mail`, `password`) VALUES ('$name','$no','$mail','$pass')";
mysqli_query($conn,$q);

?>
