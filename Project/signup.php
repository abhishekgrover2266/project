<?php
include 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>signup</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
        <?php
        include 'includes/header.php';
        include 'includes/login.php'
        ?>
        <div class="row" style="margin-top:65px;">
            <div class='col-xs-8'>
                <img src='img/0.jpg' alt='smartwatch' class="img-responsive img-thumbnail">
            </div>
            <div class="col-xs-4">
		<h1>SIGN UP</h1>
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" required="required">
                    </div>		
                    <div class="form-group">
                    <input type="text" name="email" placeholder="Email" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <div><?php echo $_GET['error']; ?></div>
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="text" name="contact" placeholder="Contact" required="required" class="form-control" pattern=".{10,}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="city" placeholder="City" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="text" name="address" placeholder="Address" required="required" class="form-control">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
            </div>
         </div>
      <?php
            include 'includes/footer.php';
        ?> 
    </body>
</html>