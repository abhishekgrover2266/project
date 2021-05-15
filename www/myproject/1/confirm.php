<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location:index.php');
}
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
        <?php
        $user_id=$_SESSION['id'];
        $query="SELECT item_id,name,price FROM users_items INNER JOIN items ON users_items.item_id=items.id WHERE user_id='$user_id' AND status='Added to cart'";
        $qr=mysqli_query($con,$query) or die(mysqli_error($con));
        $n=mysqli_num_rows($qr);
        $sum=0;
        $i=1;
        $arr= mysqli_fetch_array($qr);
        $id="".$arr['item_id'];
        if($n==0){
            echo "<h3 style='margin:80px 0px 420px 0px'><a href='home.php'>Add</a> items to cart first</h3>";
        }else{
        ?>
        <div class="row" style="margin:80px 0px 310px 0px">
	<div class="col-xs-6 col-xs-offset-3">
	<table class="table">
	<tr><th>Item Number</th><th>Price<th/><th/>
	<?php
            while($n>0){
               $sum=$sum + $arr['price'];
               echo "<tr><td>".$arr['item_id']."</td><td>".$arr['price']."</td><td><a href='cart_remove.php?id=".$arr['item_id']."'class='remove_item_link'>Remove</a></tr>";
               $arr= mysqli_fetch_array($qr);
               $id= $id.",".$arr['item_id'];
               $i++;
               $n--;
            }
        echo "<tr><td>Total"."</td><td>Rs".$sum."</td><td><a href='success.php?id=$id'>Confirm Order</button></a></td></tr>";
        }
        ?>
        </table>
	</div>
	</div>
        <?php
        include 'includes/footer.php';
        ?>
  </body>
</html>