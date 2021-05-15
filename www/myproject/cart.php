<?php
include 'common.php';
                   if (!isset($_SESSION['Email'])) {
header('location:index.php');
}
?>

    
<html>
    <head>
        <title>cart</title>
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="store.css">
        <style>body{background: url("img/back.jpg") ;
           
            }
        h1{background: white;
           text-align: center;
           font-family: cursive;
           color:   lawngreen;
           font-size: 48px;
        }
        a{color: blue}</style>
  </head>
    <body>
          <div class="container">
        <nav class="navbar navbar-default">
            
                <div>
                    <ul class="nav navbar-nav" style="letter-spacing: 4px;padding-left: 30px">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li style="font-family: cursive;padding-left: 100px;font-weight: bold;letter-spacing: 4px;padding-top: 15px">KRISHNA HOME ACCESSORIES</li>
                        
                        <li><a href="about.html"style="padding-top: 15px;padding-left: 300px; font-family: sans-serif;font-style:  italic; font-size: 18px;"><span class="glyphicon glyphicon-user"></span></a></li>
                        <li><a href="settings.php">SETTING</a></li>
                    </ul>
                </div></nav> 
                    <?php
 
        $user_id=$_SESSION['id'];
        $qant=$_POST['quantity'];
        $query="SELECT item_id,Name,Price FROM users_items INNER JOIN items ON users_items.item_id=items.id WHERE user_id='$user_id' AND status='Added to cart'";
        $qr=mysqli_query($con,$query) or die(mysqli_error($con));
        $n=mysqli_num_rows($qr);
        $sum=0;
        $i=1;
        $arr= mysqli_fetch_array($qr);
         if($n==0){
             
            echo "<h1 style='margin:250px 0px 320px 0px'>Your Cart Is Empty.<br/>If YOU Want To Purchase Then<br/>"."<a href='products.php'>Add</a> items to cart first</h1>";
        }else{
        ?>
        <div class="row" style="margin:80px 0px 0px 0px">
	
            <table class="table" style="background: white">
                <tr><th>Item Number</th><th>Item Image</th><th>Item Name</th><th>Price<th/><th/>
                    
	 <?php
while($n>0){
         $id=$arr['item_id'];
$imgUrl = "website/cushion/$id.jpg";
               $sum=$sum + $arr['Price'];
               $sum1=$sum*$qant;
               echo "<tr><td>".$arr['item_id']."</td>"?><td><img src="<?= $imgUrl; ?>" width="200px" height="150"/> </td> <?php echo " <td>".$arr['Name']."</td><td>".$arr['Price']."</td><td><a href='cart_remove.php?id=".$arr['item_id']."'class='remove_item_link'>Remove</a></tr>";
               $arr= mysqli_fetch_array($qr);
               $i++;
               $n--;
            }
            
            
        echo "<tr><td>Total"."<td></td><td></td><td>Rs".$sum."</td><td style='background: red;'><a href='success.php?id=$id' style='color:white'>Confirm Order</a></td></tr>";
        }
        ?>
        </table>
        </div>
        </div>
              </div>
            <footer style="margin-top: 200px;font-size: 19px;font-style:  initial;color: black;padding-top: 90px;"><center>
                <p style="background: wheat;font-family: cursive">copyright@krishnastore | CONTACT:9034628466 | EMAIL:as677694@gmail.com  |  BEST DEALS HERE.</p>
            </center></footer>
    
    </body>
</html>
