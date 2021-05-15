<?php
include 'common.php';
$email=$_POST['Email'];
$pass= $_POST['Password'];
$query="SELECT * FROM users WHERE Email='$email' AND Password='$pass';"; 
$queryr= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($queryr) == 0){
    $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
}else{
    $arr= mysqli_fetch_array($queryr);
    $_SESSION['id']= $arr['id'];
    $_SESSION['Email']=$email;
    header('location:products.php');
}
?>

