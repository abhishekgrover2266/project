<?php
include 'includes/common.php';
$email=$_POST['email'];
$pass= md5($_POST['password']);
$query="SELECT * FROM users WHERE email='$email' AND password='$pass';"; 
$queryr= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($queryr) == 0){
    header('location:index.php?error=Invalid credentials');
}else{
    $arr= mysqli_fetch_array($queryr);
    $_SESSION['id']= $arr['id'];
    $_SESSION['email']=$email;
    header('location:home.php');
}
?>

