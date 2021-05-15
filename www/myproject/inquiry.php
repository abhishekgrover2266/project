<?php
include 'common.php';
$uid=$_SESSION['id'];
$name=$_POST['name'];
$em=$_POST['email'];
$msg=$_POST['message'];
$query="INSERT INTO enquiry (Name, Email, Message) VALUES ('$name', '$em', '$msg');";
$qr= mysqli_query($con, $query) or die(mysqli_error($con));
?>
