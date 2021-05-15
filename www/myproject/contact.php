<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
        <?php
        include 'header.php';
        ?>
      <div class="container">
          <div class="row" style='margin-top:80px;'>
              <div class="col-xs-9">
                  <h2>LIVE SUPPORT</h2>
                  <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
                  <p>Hello!We'd like to make sure that your contact submission/feedback is directed to the appropriate team at E-Store. Please read through the following carefully before submitting below:<br><br>
                      1.We can only address issues related to E-Store.<br>
                  2.For more information, please see our E-store Information Page first.</p>
              </div>
              <div class="col-xs-3">
                  <img src="img/6.jpg" alt="contact us" class="img-responsive img-circle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-8">
                  <h2>CONTACT US</h2>
                  <form method="post" action="inquiry.php">
                      <div class="form-group">
                          Name:
                          <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                          Email:
                          <input type="text" name="email" class="form-control">
                      </div>
                      <div class="form-group">
                          Message:
                          <input type="text" name="message" class="form-control input-lg">
                      </div>
                      <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
              </div>
              <div class="col-xs-4">
                  <h2>Company Information:</h2>
                  Sector-18 ,NEAR HUDA OFFICE,<br>
                  PANIPAT,<br>
                  Haryana (132103),India<br>
                  Phone:+91-9034-628466<br>
                  Email:as677694@gmail.com<br>
                                  
              </div>
          </div>
      </div>
         </body>
</html>

