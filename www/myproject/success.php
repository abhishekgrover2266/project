<?php
include 'common.php';
if (!isset($_SESSION['Email'])) {
header('location:index.php');
}
$user_id=$_SESSION['id'];
$item_id="".$_GET['id'];
$q="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
$qr= mysqli_query($con, $q);
?>
<html>
    <head>
        <title>KRISHNA'S STORE</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="store.css">
    </head>
    <body style="background:  white">
        <nav class="navbar navbar-default">
            <div class="container">
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="products.html">PRODUCTS</a></li>
                         <li style="font-family: cursive;padding-left: 100px;font-weight: bold;letter-spacing: 4px;padding-top: 15px">KRISHNA HOME ACCESSORIES</li>
                        </ul>
                </div>
            </div>
        </nav>
        <div class="kcs">
            <center> <img src="img/logo2.jpg" style="height: auto;width: auto">
            </center></div>
        <div class="container" style="padding-top: 40px">
            <h1 style="font-family: cursive;font-weight: bold;color: wheat;">Your Order Is Confirmed.</h1>
            <p style="font-family: cursive;color:  turquoise; font-size: 36px">THANKYOU FOR CHOOSING US. <br/>
                HOPE YOU FEEL BETTER TO SEE OUR PRODUCTS</p>
            <p style="font-family: cursive;color: bisque  ;font-size: 36px">Stay connect with us.</p>
        
            <p style="font-family: cursive;color: darkseagreen ;font-size: 40px"><a href="products.php">click here</a> to purchase another item.</p></div>
        <footer style="font-size: 19px;font-style:  initial;color: black;padding-top: 90px;"><center>
                <p style="background: wheat;font-family: cursive">copyright@krishnastore | CONTACT:9034628466 | EMAIL:subhashgrover5444@gmail.com  |  BEST DEALS HERE.</p>
            </center></footer>
    
    </body>
</html>