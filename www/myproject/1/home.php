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
    <title>E-Store-home</title>
	<link rel="stylesheet" href="style.css" >
  </head>
  <body>
        <?php
        include 'includes/header.php';
        include 'includes/Check-if-added.php';
        ?>
      
	<div class="container-fluid" style="margin:80px;">
		<div class="row text-center">
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#1</h4>
                </div>
		<img src="img/1.jpg" alt="Apple" class="img-responsive">
		<div class="caption">
		<p>
                      6.5-inch display,12MP dual cameras,7MP front camera,Portrait Lighting 
                    </p>
		<p>
                    <strong>Price:Rs.69,900</strong>
                </p>
                <?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(1)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?>
                </div>
		</div>
		</div>
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#2</h4>
                </div>
		<img src="img/2.jpg" alt="Apple" class="img-responsive">
		<div class="caption">
                    <p>
                      6.5-inch display,Triple-camera 12MP Ultra Wide,Night mode,12MP front camera 
                    </p>
		<p>
                    <strong>Price:Rs.1,17,100</strong>
                </p>
                <?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(2)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?>
		</div>
		</div>
		</div>
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#3</h4>
                </div>
		<img src="img/3.jpg" alt="Apple" class="img-responsive">
		<div class="caption">
                    <p>
                      6.1-inch display,Dual camera with 12MP Ultra Wide,Night mode,12MP front camera 
                    </p>
		<p>
                    <strong>Price:Rs.68,300</strong>
                </p>
		<?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(3)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?></div>
		</div>
		</div>
                </div>
		<div class="row text-center">
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#4</h4>
                </div>
		<img src="img/5.jpg" alt="Samsung" class="img-responsive">
		<div class="caption">
                    <p>
                      6.4-inch display,4GB RAM,64GB,Android v9.0 Pie,48MP + 8MP + 5MP triple rear camera,6000mAH 
                    </p>
		<p>
                    <strong>Price:Rs.14,999</strong>
                </p>
		<?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(4)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?></div>
		</div>
		</div>
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#5</h4>
                </div>
		<img src="img/8.jpg" alt="Xiaomi" class="img-responsive">
		<div class="caption">
                    <p>
                      6.67-inch display,64MP rear camera 32MP front camera,Android v10,5020mAH battery
                    </p>
		<p>
                    <strong>Price:Rs.16,999</strong>
                </p>
		<?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(5)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?></div>
		</div>
		</div>
		<div class="col-md-4 col-sm-6">
		<div class="thumbnail">
                <div>
                <h4>#6</h4>
                </div>
		<img src="img/7.jpg" alt="Apple" class="img-responsive">
		<div class="caption">
                    <p>
                      6.5-inch display,48MP+12MP+5MP+5MP rear camera|32MP front camera,Android v10,4000mAH 
                    </p>
		<p>
                    <strong>Price:Rs.25,250</strong>
                </p>
		<?php 
                if (!isset($_SESSION['email'])) { 
                ?>
                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">OrderNow!</a> 
                <?php } else { 
                    if (check_if_added_to_cart(6)) {  
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else { 
                ?> 
                <a href="cart-add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php 
                } 
                } 
                ?></div>
		</div>
		</div>		
		</div>
        </div>
                <?php
                include 'includes/footer.php';
                ?>
  </body>
</html>