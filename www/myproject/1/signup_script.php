<?php
include 'includes/common.php';
$name= $_POST['name'];
$email= $_POST['email'];
$pass= md5($_POST['password']);
$cont=$_POST['contact'];
$city=$_POST['city'];
$add=$_POST['address'];
$qu="SELECT id FROM users WHERE email='$email'";
$query = "insert into users(name,email,password,contact,city,address) VALUES ('$name','$email','$pass','$cont','$city','$add')";
$qur = mysqli_query($con,$qu) or die(mysqli_error($con));
if(mysqli_num_rows($qur)>0){
    header('location:signup.php?error=Already registered');
}else{
    $qr = mysqli_query($con,$query) or die(mysqli_error($con));
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:home.php');
}
?>