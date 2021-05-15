<?php
include 'common.php';
if (!isset($_SESSION['Email'])) {
header('location:index.php');
}
$a=$_GET['Id'];
$query="select * from items where id='$a'";
$q= mysqli_query($con, $query);
$qr= mysqli_fetch_array($q);
$id1=$qr['Name'];
$id=$qr['id'];
$id3=$qr['Price'];
$imgUrl = "website/cushion/$a.jpg";
echo $id1;

?>
<html>
    <head>
        <title>
            Description
        </title>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>
    <body ><?php include 'check-if-added.php'; ?>
        <div class="container-fluid"style="background:  plum;padding-bottom: 20px">
          <nav class="navbar navbar-default" style="padding: 20px 0px 20px 0px;background: white;margin-top: 10px">
            
                <div>
                    <ul class="nav navbar-nav" style="font-family: initial;letter-spacing: 6px;">
                        <li><img src="img/logo2.jpg" style="height:60px;width: 300px;padding-left: 80px"></li>
                        <li style="font-size: 20px;padding-right: 40px;padding-left: 500px;color:  plum"><a href="index.php">Home</a></li>
                        <li style="font-size: 20px;padding-right: 40px;color:  plum"><a href="products.php">Products</a></li>
                        <li style="font-size: 20px;padding-right: 40px;color:  plum"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li style="font-size: 20px;padding-right: 40px;color:  plum"><a href="Myaccount.php" ><span class="glyphicon glyphicon-user"></span></a></li></ul>
                </div></nav><div class="center" style="background-size:cover;margin: 30px 0px 30px">
                    <div class="col-xs-5">                         
                        <img src="<?=$imgUrl; ?>" style="height: 500px;width: auto;padding-left: 100px">
                    </div><div class="col-xs-4"style="background: #cc00cc;margin-left: 140px;padding-bottom: 87px;border: solid 1px white"><p style="padding-top: 150px;font-family:  cursive;font-size: 30px;color: white"><?php echo "$id1";?><br/>
                        <p style="padding-top: 20px;font-family:   sans-serif;font-size: 29px;color: white"><?php echo "RS"."$id3"."INR.";?></p><br><i style="font-size: 20px;color: whitesmoke">Quantity</i></p>
                    <form method="POST" action="cart.php">
                        <input type="number" value="1"name="quantity" class="form-control">
                            </form><br><br>
                            <?php  
                    if (check_if_added_to_cart($id)) {  
                    echo '<a href="Description.php" class="btn btn-block btn-success"  disabled>Added to cart</a>';
                    } else { 
                ?> 
                            <a href="cart-add.php?id=<?=$id ?>" name="add" class="btn btn-block btn-success"style="padding:12px 0px 12px 0px;font-size: 16px">Add to cart</a> 
                <?php 
                } 
                
                ?></div>
                   </div>
        </div><div style="border:solid 1px black;margin-top: 30px;background:  #cc0033">
        <h1 style="padding-top: 40px;padding-bottom: 20px;text-align: center;color: white"><u>FEATURES</u></h1>
        <p style="font-family:  cursive;"><br><ul style="font-size: 30px;padding-left: 60px;font-family: cursive;color: white">
            <li><u>SET of 5 Cushions</u></li>
            <li style="padding: 20px 0px 20px 0px;">Vibrant double-sided print throw pillows to update any room</li>
            <li style="padding: 20px 0px 20px 0px;">Independent designs, custom printed when you order</li>
            <li style="padding: 20px 0px 20px 0px;">Soft and durable 100% spun polyester cover with an optional polyester fill/insert</li>
            <li style="padding: 20px 0px 20px 0px;">Concealed zip opening for a clean look and easy care</li>
            <li style="padding: 20px 0px 20px 0px;">Note: Some designs are not available in all sizes.</li>
            <li style="padding: 20px 0px 20px 0px;">We recommend using inserts/fills that are bigger than the covers to ensure a plump finish</li></ul></p>
    </div><div class="content" style="margin-top: 50px;padding: 30px 0px 30px 0px"><center>
            <h1 style="font-family:  inherit;letter-spacing: 5px;padding-bottom: 30px"><center>IMAGE</center></h1>
            <img src="<?=$imgUrl; ?>" alt="CUSHION" style="height: 700px;width: 980px">
        </center></div><div style="border: solid 2px plum">
        <h1 style="padding-top: 40px;padding-bottom: 20px;text-align: center;letter-spacing: 5px;font-family: cursive"><u>Similar-PRODUCTS</u></h1>
        
         <div class="col-md-3 col-sm-3"> 
            <div class="thumbnail" style="opacity: 3; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <a href="website/cushion/1.jpg"><img src="website/cushion/1.jpg" alt="WHITE CUSHION COVER" class="img-responsive" ></a>
                        <div class="caption">
                            <h4 style="font-weight: bold"><?php     echo "<a href='Description.php?Id=1'>CUSHION COVER</a>";?></h4>
                            <p style="font-family: cursive">COLOR : WHITE</p>
                            <p style="font-weight: bold">PRICE: <u style="color: red">( 40% off Rs.500)</u>Rs.300 Only</p>
                <?php  
                    if (check_if_added_to_cart(1)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-3"> 
            <div class="thumbnail">
                <a href="website/cushion/2.jpg"><img src="website/cushion/2.jpg" alt="BLACK COVER" class="img-responsive" ></a>
                        <div class="caption">
                            <h4> <a href='Description.php?Id=2' style="border-bottom-color: none"> Black-Loving cover</a></h4>
                            <p style="font-family: cursive">COLOR : BLACK</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.700)</u>Rs.280 Only</p>
                <?php  
                    if (check_if_added_to_cart(2)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/3.jpg"> <img src="website/cushion/3.jpg" alt="mehroon" class="img-responsive" style="height: 250px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=3' style="border-bottom-color: none">MEHROON VELVET</a></h4>
                            <p style="font-family: cursive">COLOR : MEHROON</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.500)</u>Rs.300 Only</p>
                <?php  
                    if (check_if_added_to_cart(3)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/4.jpg"><img src="website/cushion/4.jpg" alt="RED" class="img-responsive"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=4' style="border-bottom-color: none">RED ROSE</a></h4>
                            <p style="font-family: cursive">COLOR : RED</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.500)</u>Rs.300 Only</p>
                <?php  
                    if (check_if_added_to_cart(4)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="row text-center" style="color:#9d9d9d;padding-top: 20px;margin-top: 500px;background:  #cccccc  ">
		<div class="col-md-4 col-sm-6">
                    <h2 style="color: black">Information</h2>
                    <p style="padding: 10px 0px 10px 0px"><a href="contact.php"style="color:black" class="x">Contact Us</a></p>                                        
                    <p style="padding: 10px 0px 10px 0px"><a href="products.php"style="color:black" class="x">PRODUCTS</a></p> 
                </div>
		<div class="col-md-4 col-sm-6">
                    <h2 style="color: black">My Account</h2>
                    <p style="padding: 10px 0px 10px 0px"><a href="Myaccount.php"style="color:black"class="x">USER'S PROFILE</a></p>
                    <p style="padding: 10px 0px 10px 0px"><a href="cart.php"style="color:black" class="x">CART</a></p>
		</div>
                <div class="col-md-4 col-sm-6">
                    <h2 style="color: black">Contact Us</h2>
                    <P style="color: black;padding: 10px 0px 10px 0px">Contact:+91 90346-28466,9896005444</p>
                    <p style="color: black;padding: 10px 0px 10px 0px">Email:  as677694@gmail.com</p>
		</div>
                </div>
</footer>


       
        
    
    </body>
</html>

