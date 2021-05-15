<?php
include 'common.php';
$uid=$_SESSION['id'];
$name=$_POST['Name'];
$ln=$_POST['Last'];
$ph=$_POST['Phone'];
$em=$_POST['Email'];
$ct=$_POST['City'];
$st=$_POST['State'];
$zip=$_POST['Zip'];
$add=$_POST['Adress1'];
$qr8="UPDATE users SET Name = '$name' WHERE id = $uid";
$qr="UPDATE users SET Last = '$ln' WHERE id = $uid";
$qr2="UPDATE users SET Contact = '$ph' WHERE id = $uid";
$qr3="UPDATE users SET Email = '$em' WHERE id = $uid";
$qr4="UPDATE users SET City = '$ct' WHERE id = $uid";
$qr5="UPDATE users SET State = '$st' WHERE id = $uid";
$qr6="UPDATE users SET Zip = '$zip' WHERE id = $uid";
$qr7="UPDATE users SET Adress = '$add' WHERE id = $uid";
$query= mysqli_query($con, $qr) or die(mysqli_error($con));
$query= mysqli_query($con, $qr2) or die(mysqli_error($con));
$query= mysqli_query($con, $qr3) or die(mysqli_error($con));
$query= mysqli_query($con, $qr4) or die(mysqli_error($con));
$query= mysqli_query($con, $qr5) or die(mysqli_error($con));
$query= mysqli_query($con, $qr6) or die(mysqli_error($con));
$query= mysqli_query($con, $qr7) or die(mysqli_error($con));

$query= mysqli_query($con, $qr8) or die(mysqli_error($con));
header('location:Myaccount.php');
?>
