<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location:index.php');
}
$user_id=$_SESSION['id'];
$item_id="".$_GET['id'];
$q="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
$qr= mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Success</title>
	<link rel="stylesheet" href="style.css" >
  </head>
  <body>
        <?php
        include 'includes/header.php';
        ?>
          <div class="row text-center" style="margin:80px 0px 360px 0px" >
          <div class="col-xs-4 col-xs-offset-4">
              Thankyou for ordering from E-Store. The order shall be delivered to you shortly.<br><br>
              Order some more electronics item <a href="home.php">here.</a>
          </div>  
          </div>
      <?php
        include 'includes/footer.php';
        ?>
  </body>
</html>
