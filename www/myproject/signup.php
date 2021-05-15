<?php
include 'common.php';

?>

<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="store.css">
        <style>
body{
    background: url("img/d7.jpg") no-repeat center;
    background-size:  cover;
    margin-top: 0px;
    height: 100%
}
</style>
   
       </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" style="margin-bottom: 0px;">
            
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php">SIGNUP</a></li>
                        <li><a href="products.php">PRODUCTS</a></li></ul>
                <ul class="nav navbar-right">   
                    <li><a href="cart.php" style="font-size:18px;color: black; margin-right:13px"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                </ul>
            </div>
        </nav>
            <div class="container-fluid">
         <div class="row">
                <div class="col-lg-4 ">
                    <center> <h2 style="color: white">SIGN UP</h2></center>
                     <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <b style="color: white">Name:</b>
                            <input type="text" name="Name" placeholder="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <b style="color: white">Email:</b>
                                <input type="text" name="Email" placeholder="email" class="form-control">
                        </div>
                        <div></div>
                                <div class="form-group">
                                    <b style="color: white">Password:</b>
                                <input type="password" name="Password" placeholder="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b style="color: white">Contact</b>
                                <input type="text" name="Contact" placeholder="Contact" class="form-control">
                                </div>  
                                <div class="form-group">
                                    <b style="color:white">CITY:</b><input type="text" name="City" placeholder="City" class="form-control"required="required">
            </div>
                        <div class="form-group ">
                            <b style="color:white">State:</b>
                            <input type="text" name="State" placeholder="State" class="form-control"required="required">
            </div>
            
            <div class="form-group ">
                <b style="color:white">ZIP:</b><input type="number" name="Zip" placeholder="Zip-Code" class="form-control"required="required">
            </div>
                            
                               
                        <div class="form-group">
                            <b style="color: white">Adress</b>
                            <input type="text" name="Adress" placeholder="Adress" class="form-control">
                        </div><br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                         
   
                    </form>
                </div>
            </div>
            
        </div>
            <footer>
                <p style="background: white;font-family: cursive;text-align: center;color: black;margin-top: 30px">copyright@krishnastore | CONTACT:9034628466 | EMAIL:as677694@gmail.com  |  BEST DEALS HERE.</p>
                    </footer>
    </body>
</html>
