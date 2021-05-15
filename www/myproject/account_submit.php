<?php 
$uid=$_SESSION['id'];
$query="SELECT * FROM users where id='$uid'";
$qr=mysqli_query($con,$query) or die(mysqli_error($con));
$n=mysqli_num_rows($qr);
$arr= mysqli_fetch_array($qr);
$id2=$arr['Name'];
$id3=$arr['Contact'];
$id4=$arr['Email'];
$id5=$arr['Adress'];
$id6=$arr['Password'];
$id7=$arr['City'];
$id8=$arr['State'];
$id9=$arr['Zip'];
$id10=$arr['Last'];
?>
