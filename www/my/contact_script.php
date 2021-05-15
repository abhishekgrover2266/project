<?php  
include 'common.php';
$name=$_POST['NAME'];
$contact=$_POST['PHONE'];
$email=$_POST['email'];
$city=$_POST['CITY'];
$msg=$_POST['message'];
$query="insert into contact(name,phone,email,city,message) values ('$name','$contact','$email','$city','$msg')";
$qr= mysqli_query($con, $query) or die(mysqli_error($con));

?>