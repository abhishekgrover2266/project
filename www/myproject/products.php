<?php
include 'common.php';
if (!isset($_SESSION['Email'])) {
header('location:index.php');
}
?>
<html>
    <head>
        <title style="font-family: cursive">Products</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background:  wheat ">
        <?php
         include 'Check-if-added.php';
        ?>
        <div class="container">
        <nav class="navbar navbar-default">
            
                <div>
                    <ul class="nav navbar-nav" style="letter-spacing: 4px;padding-left: 30px">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contact.php">CONTACT-US</a></li>
                        <li style="font-family: cursive;padding-left: 100px;font-weight: bold;letter-spacing: 4px;padding-top: 15px">KRISHNA HOME ACCESSORIES</li>
                        <li><a href="cart.php" style="padding-top: 15px;padding-left: 200px; font-family: sans-serif;font-style:  italic; font-size: 18px;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="Myaccount.php"style="padding-top: 15px;font-size: 18px;padding-left: 60px" ><span class="glyphicon glyphicon-user"></span></a></li></ul>
                </div></nav>
            </div>
    <center><h3 style="font-family: inherit;color:  navy;font-weight: bolder">CUSHION SET OF 5 PCS.</h3></center>
        <div class="row text-center">
            
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
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/5.jpg"><img src="website/cushion/5.jpg" alt="RED" class="img-responsive"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=5' style="border-bottom-color: none">WINE-RED SOFT</a></h4>
                            <p style="font-family: cursive">COLOR : WINE</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.850)</u>Rs.340 Only</p>
                <?php  
                    if (check_if_added_to_cart(5)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/6.jpg"><img src="website/cushion/6.jpg" alt="white" class="img-responsive"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=6' style="border-bottom-color: none">CREAM-MYSTIC</a></h4>
                            <p style="font-family: cursive">COLOR : CREAM</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.700)</u>Rs.280 Only</p>
                <?php  
                    if (check_if_added_to_cart(6)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/7.jpg"><img src="website/cushion/7.jpg" alt="COFFEE" class="img-responsive"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=7'>COFFEE-WHITE</a></h4>
                            <p style="font-family: cursive">COLOR : COFFEE</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.875)</u>Rs350 Only</p>
                <?php  
                    if (check_if_added_to_cart(7)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=7" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/8.jpg"><img src="website/cushion/8.jpg" alt="white" class="img-responsive" style="height: 280px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=8'>ADJUST-SIZE PILLOWS</a></h4>
                            <p style="font-family: cursive">COLOR : WHITE </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1200)</u>Rs.480 Only</p>
                <?php  
                    if (check_if_added_to_cart(8)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=8" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/9.jpg"><img src="website/cushion/9.jpg" alt="white" class="img-responsive" style="height: 250px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=9'>STAR-BEDSHEET</a></h4>
                            <p style="font-family: cursive">COLOR :  BLUE</p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.950)</u>Rs.380 Only</p>
                <?php  
                    if (check_if_added_to_cart(9)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=9" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/10.jpg"> <img src="website/cushion/10.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=10'>FLOWER-RED SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : RED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.875)</u>Rs.350 Only</p>
                <?php  
                    if (check_if_added_to_cart(10)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=10" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/11.jpg"> <img src="website/cushion/11.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=11'>PRINTED MIX</a></h4>
                            <p style="font-family: cursive">COLOR : mix </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1000)</u>Rs.400 Only</p>
                <?php  
                    if (check_if_added_to_cart(11)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=11" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/12.jpg"> <img src="website/cushion/12.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=12'>PRINTED-FLOWERS BOTTOM</a></h4>
                            <p style="font-family: cursive">COLOR : CREAN-RED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.900)</u>Rs.360 Only</p>
                <?php  
                    if (check_if_added_to_cart(12)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=13" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/13.jpg"><img src="website/cushion/13.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=13'>BROWN LOFTED FLOWERSHEET</a></h4>
                            <p style="font-family: cursive">COLOR : BROWN </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.950)</u>Rs.380 Only</p>
                <?php  
                    if (check_if_added_to_cart(13)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=13" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/14.jpg"><img src="website/cushion/14.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=14'>HEART-RED SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : RED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.910)</u>Rs.365 Only</p>
                <?php  
                    if (check_if_added_to_cart(14)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=14" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/15.jpg"><img src="website/cushion/15.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=15'>HEART-BLUE</a></h4>
                            <p style="font-family: cursive">COLOR : BLUE </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1050)</u>Rs.420 Only</p>
                <?php  
                    if (check_if_added_to_cart(15)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=15" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/16.jpg"><img src="website/cushion/16.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=16'>MOMS-LOVE SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : PRINTED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.950)</u>Rs.380 Only</p>
                <?php  
                    if (check_if_added_to_cart(16)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=16" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/17.jpg"><img src="website/cushion/17.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=17'>FLOWER BOTTOM</a></h4>
                            <p style="font-family: cursive">COLOR : SHADED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1060)</u>Rs.425 Only</p>
                <?php  
                    if (check_if_added_to_cart(17)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=17" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/18.jpg"><img src="website/cushion/18.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=18'>CLASSIC SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : MIXED </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.975)</u>Rs.390 Only</p>
                <?php  
                    if (check_if_added_to_cart(18)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=18" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/19.jpg"><img src="website/cushion/19.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=19'>ELEPHANT CLASSIC</a></h4>
                            <p style="font-family: cursive">COLOR : BLUE </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1125)</u>Rs.450 Only</p>
                <?php  
                    if (check_if_added_to_cart(19)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=19" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/20.jpg"><img src="website/cushion/20.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=20'>ELEPHANT ROYAL BROWN</a></h4>
                            <p style="font-family: cursive">COLOR :BROWN </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1000)</u>Rs.400 Only</p>
                <?php  
                    if (check_if_added_to_cart(20)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=20" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/21.jpg"><img src="website/cushion/21.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=21'>PRINTED CLASSIC</a></h4>
                            <p style="font-family: cursive">COLOR : RED-BROWN </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1100)</u>Rs.440 Only</p>
                <?php  
                    if (check_if_added_to_cart(21)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=21" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/22.jpg"><img src="website/cushion/22.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=22'>PRINTED MIX SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : MIX </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1050)</u>Rs.420 Only</p>
                <?php  
                    if (check_if_added_to_cart(22)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=22" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/23.jpg"><img src="website/cushion/23.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=23'>PRINT ROYAL BROWN</a></h4>
                            <p style="font-family: cursive">COLOR : BROWN </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1150)</u>Rs.460 Only</p>
                <?php  
                    if (check_if_added_to_cart(23)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=23" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/24.jpg"> <img src="website/cushion/24.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=24'>PEACOCK CLASSIC BEDSHEET</a></h4>
                            <p style="font-family: cursive">COLOR : LIGHT </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1100)</u>Rs.440 Only</p>
                <?php  
                    if (check_if_added_to_cart(24)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=24" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/25.jpg"><img src="website/cushion/25.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=25'>BEDSHEET PLUM</a></h4>
                            <p style="font-family: cursive">COLOR : BROWN </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1150)</u>Rs.460 Only</p>
                <?php  
                    if (check_if_added_to_cart(25)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=25" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/26.jpg"><img src="website/cushion/26.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=26'>PEACOCK SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : GREENISH </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1150)</u>Rs.460 Only</p>
                <?php  
                    if (check_if_added_to_cart(26)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=26" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/27.jpg"><img src="website/cushion/27.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=27'>OSMOSIS PRINTED</a></h4>
                            <p style="font-family: cursive">COLOR : LIGHT BLUE </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1125)</u>Rs.450 Only</p>
                <?php  
                    if (check_if_added_to_cart(27)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=27" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/28.jpg"><img src="website/cushion/28.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=28'>BEAUTY PRINTED SHEET</a></h4>
                            <p style="font-family: cursive">COLOR : MIX </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1150)</u>Rs.460 Only</p>
                <?php  
                    if (check_if_added_to_cart(28)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=28" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-3"> 
                <div class="thumbnail">
                    <a href="website/cushion/29.jpg"><img src="website/cushion/29.jpg" alt="white" class="img-responsive" style="height: 250px;width: 200px"></a>
                        <div class="caption">
                            <h4><a href='Description.php?Id=29'>BLUISH OSMOSION</a></h4>
                            <p style="font-family: cursive">COLOR : BLUE </p>
                            <p style="font-weight: bold">PRICE:<u style="color: red">( 40% off Rs.1200)</u>Rs.480 Only</p>
                <?php  
                    if (check_if_added_to_cart(29)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=29" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                
                ?>
                    </div>
                </div>
            </div> </div>   <footer style="font-size: 19px;font-style:  initial;color: black;padding-top: 90px;"><center>
                <p style="background: white;font-family: cursive">copyright@krishnastore | CONTACT:9034628466 | EMAIL:as677694@gmail.com  |  BEST DEALS HERE.</p>
            </center></footer>
    
            </body>
</html>