<?php
include 'common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$q="DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
$qr= mysqli_query($con,$q);
header('location:Myaccount.php');
?>
