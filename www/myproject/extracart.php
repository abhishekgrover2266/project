
    
<html>
    <head>
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        h1{background: white;
           text-align: center;
           font-family: cursive;
           color:   lawngreen;
           font-size: 28px;
        }
        a{color: blue}</style>
  </head>
  <body style="border-left: solid 1px black">
        <div class=" col-xs-6 col-md-6">
        <?php
 
        $user_id=$_SESSION['id'];
        $query="SELECT item_id,Name,Price FROM users_items INNER JOIN items ON users_items.item_id=items.id WHERE user_id='$user_id' AND status='Added to cart'";
        $qr=mysqli_query($con,$query) or die(mysqli_error($con));
        $n=mysqli_num_rows($qr);
        $sum=0;
        $i=1;
        $arr= mysqli_fetch_array($qr);
         if($n==0){
             
            echo "<h1 style='margin:150px 0px 100px 0px'>Your Cart Is Empty.<br/>If YOU Want To Purchase Then<br/>"."<a href='products.php'>Add</a> items to cart first</h1>";
        }else{
        ?>
        <div class="row"style="margin-left: 0px 40px 0px 70px">
	
            <table class="table" style="background: white;border: solid 2px black">
                <tr><th>Item Number</th><th>Item Image</th><th>Item Name</th><th>Price<th/><th/>
                    
	 <?php
while($n>0){
         $id=$arr['item_id'];
$imgUrl = "website/cushion/$id.jpg";
               $sum=$sum + $arr['Price'];
               
               echo "<tr><td>".$arr['item_id']."</td>"?><td><img src="<?= $imgUrl; ?>" width="150px" height="100"/> </td> <?php echo " <td>".$arr['Name']."</td><td>".$arr['Price']."</td><td><a href='cartremove2.php?id=".$arr['item_id']."'class='remove_item_link'>Remove</a></tr>";
               $arr= mysqli_fetch_array($qr);
               $i++;
               $n--;
            }
            
            
        echo "<tr><td>Total"."<td></td><td></td><td>Rs".$sum."</td><td style='background: red;'><a href='success.php?id=$id' style='color:white'>Confirm Order</a></td></tr>";
        }
        ?>
        </table>
            <center><h4><a href="products.php" style="background: yellow;color: orangered;text-align: center;font-family: cursive">ADD MORE PRODUCTS TO THE CART</a></h4></center>
    </div>
        </div>
              
        
    </body>
</html>
