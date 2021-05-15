<?php  
include 'common.php';
$name=$_POST['NAME'];
$contact=$_POST['PHONE'];
$email=$_POST['EMAIL'];
$city=$_POST['CITY'];
$website=$_POST['WEBSITE'];
$a=$_POST['QUERY'];
$query="insert into sponsor(name,phone,email,city,website,query) values ('$name','$contact','$email','$city','$website','$a')";
$qr= mysqli_query($con, $query) or die(mysqli_error($con));

?>