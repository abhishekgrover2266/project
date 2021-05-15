<?php
include 'common.php';
$name= $_POST['Name'];
$email= $_POST['Email'];
$pass= $_POST['Password'];
$cont=$_POST['Contact'];
$add=$_POST['Adress'];
$ct=$_POST['City'];
$st=$_POST['State'];
$zip=$_POST['Zip'];
$qu="SELECT id FROM users WHERE Email='$email'";
$query = "insert into users(Name,Email,Password,Contact,City,State,Zip,Adress) VALUES ('$name','$email','$pass','$cont','$ct','$st','$zip','$add')";
$qur = mysqli_query($con,$qu) or die(mysqli_error($con));
if(mysqli_num_rows($qur)>0){
    header('location:signup.php?error=Already registered');
}else{
    $qr = mysqli_query($con,$query) or die(mysqli_error($con));
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['Email']=$email;
    header('location:index.php');
}
?>