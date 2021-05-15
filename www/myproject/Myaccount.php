<?php
include 'common.php';
if (!isset($_SESSION['Email'])) {
header('location:index.php');
}

        ?>
<html>
    <head>
        <title>My Account</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    </head>
    <body style="background:   cornsilk">
    <nav class="navbar navbar-default" style="background:  element">
            
                <div>
                    <ul class="nav navbar-nav" style="letter-spacing: 4px;padding-left: 30px">
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact.php">CONTACT-US</a></li>
                        <li style="font-family: cursive;padding-left: 80px;font-weight: bold;letter-spacing: 4px;padding-top: 15px">KRISHNA HOME ACCESSORIES</li>
                        <li><a href="cart.php" style="padding-top: 15px;padding-left: 170px;margin-left: 100px; font-family: sans-serif;font-style:  italic; font-size: 18px;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    </ul>
                </div></nav>
        <?php            include 'account_submit.php';?>
  
        <div class=" col-xs-12 col-md-6"style="border-right: 1px solid black;line-height: 3">
        <center> <h2 style="font-family: var;font-weight: bolder;padding-bottom: 20px">MY ACCOUNT</h2></center>
        <form method="POST" action="acc2.php">
            <div class="form-group col-xs-6">
                NAME:<input type="text" name="Name"  placeholder="<?php echo "$id2"; ?>"  class="form-control" >
            </div>
            <div class="form-group col-xs-6">
                LAST-NAME:<input type="text" name="Last"value="<?php echo "$id10";?>" placeholder="Last-Name" class="form-control" >
            </div>
            <div class="form-group col-xs-6">
                PHONE:<input type="number" name="Phone" value="<?php echo "$id3"; ?>" class="form-control"required="required">
            </div>
                
            <div class="form-group col-xs-6">
                EMAIL:<input type="text/number" name="Email" value="<?php echo "$id4"; ?>" class="form-control"required="required">
            </div>
                        <div class="form-group col-xs-4">
                            CITY:<input type="text" name="City" placeholder="City" value="<?php echo $id7;?>" class="form-control"required="required">
            </div>
                        <div class="form-group col-xs-4">
                State:<input type="text" name="State" placeholder="State" value="<?php echo $id8;?>" class="form-control"required="required">
            </div>
            
            <div class="form-group col-xs-4">
                POSTAL CODE:<input type="number" name="Zip" placeholder="Zip-Code" value="<?php echo $id9;?>" class="form-control"required="required">
            </div>
        
            <div class="form-group ">
                ADRESS 1:<input type="text" name="Adress1" placeholder="<?php echo "$id5"; ?>" class="form-control"required="required" style="text-align:center">
            </div>
            
            <div class="form-group">
                ADRESS 2:<input type="text" name="Adress2" placeholder="Adress 2" class="form-control">
            </div>        
            <center><a href="Myaccount.php"><button type="submit" name="submit" class="btn btn-primary" style="margin-top:16px;">submit</button></a></center>
        </form></div>
<center> <h2 style="font-family: var;font-weight: bolder;padding-bottom: 20px;">MY CART</h2></center>
         <?php include 'extracart.php'; ?></div>
    
            
        
        
    </div>