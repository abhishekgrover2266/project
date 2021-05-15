<?php
include 'includes/common.php';
$opass=md5($_POST['opassword']);
$npass=md5($_POST['rpassword']);
$uid=$_SESSION['id'];
$q="UPDATE users SET password='$npass' WHERE id='$uid'";
$q2="SELECT * FROM users WHERE id='$uid'";
$q2r= mysqli_query($con, $q2) OR die(mysqli_error($con));
$x= mysqli_fetch_array($q2r);
if($x['password']!=$opass){
    header('location:settings.php?error=Wrong password');
}
else{
    $qr= mysqli_query($con, $q) OR die(mysqli_error($con));
    header('location:home.php');
}
?>
