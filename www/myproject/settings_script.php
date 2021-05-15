<?php

// This page updates the user password
require("common.php");
if (!isset($_SESSION['Email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);


$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT Email, Password FROM users WHERE Email ='" . $_SESSION['Email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['Password'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET Password = '" . $new_pass . "' WHERE Email = '" . $_SESSION['Email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>