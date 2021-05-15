<?php 
include 'common.php';
$name=$_POST['name'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$city=$_POST['city'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$participate=$_POST['participate'];
$hear=$_POST['hear'];
$img1=$_POST['img1'];
$img2=$_POST['img2'];
$query="insert into register(name,contact,age,city,email,adress,participate,hear,img1,img2) values ('$name','$contact','$age','$city','$email','$adress','$participate','$hear','$img1','$img2')";
$qr= mysqli_query($con, $query) or die(mysqli_error($con));

?>