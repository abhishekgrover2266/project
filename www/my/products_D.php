<?php
include 'common.php';
$a=$_GET['Id'];
$query="select * from items where id='$a'";
$q= mysqli_query($con, $query);
$qr= mysqli_fetch_array($q);
$id1=$qr['Name'];
$id=$qr['id'];                                                                                         
$id3=$qr['Price'];                      
$imgUrl = "img1/$a.jpg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Description</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"  crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />

      <link rel="stylesheet" type="text/css" href="newcss.css">
      <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
   <header id="header">
    <div class="container">

      
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" style="background:#000;border:none;">
          <div class="container-fluid"><div class="navbar-left ">
                  <img src="img/logo.png" class="navbar-brand" style="height:100px;width: 100px"></div>
                  <a class="navbar-brand" href="index.php"><b><b style="color: deeppink">E</b>LITE</b><br><b style="margin-left: 25px"> <b style="color: deeppink">F</b>ASHION </b><br><b style="margin-left: 60px;"><b style="color: deeppink">C</b>REW</b></a> 
                  <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
                </div> <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 30px;margin-right: 30px">
                    <li><a href="index.php"><p class="home">Home</p></a></li>         
                    <li><a href="product.php" ><p class="home">Products</p></a></li>
                    <li><a href="cart.php" ><p class="home">CART</p></a></li>
                    <li><a href="register.php" ><p class="home">REGISTER</p></a></li>
                    <li><a href="tel:954-155-9426"><p  class="btn btn-primary main_button" style="margin-top: -15px">Contact Us</p></a></li>
					
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    </div>
  </header><!-- #header -->
  <div class="container-fluid">
	  	<div class="row no-gutters">
	  		<div class="col-sm-7">
	  			<div class="content-clothes">
	  				<div class="col-sm-3 cloth-model">
	  					<p><img src="img1/4.jpg" width="60" id="img1" alt="">
	  					<p><img src="img1/3.jpg" width="60" id="img2" alt="">
	  					<p><img src="img1/2.jpg" width="60" id="img3" alt="">
	  					<p><img src="img1/1.jpg" width="60" id="img4" alt="">
	  					
	  				</div>
	  				<div class="col-sm-7 preview">
	  					<a><img src="<?=$imgUrl; ?>" width="550px" class="img-fluid" id="preview" alt=""></a>
	  					
	  				</div>	  				
	  			</div>
	  		</div>
	  		<div class="col-sm-5">
	  			<div class="parameter">
	  				<h6>BLACK</h6>
                                        <h1 class="display-1"><?php echo $id1; ?></h1>
	  				<p>PRODCUT ID:1213221</p>
	  				<hr>
	  				<h6>COLOR</h6>
	  				<div class="row no-gutters mt-4">
	  					<i class="fa fa-circle text-light" style="margin-left: 15px;font-size: 1em">LIGHT</i><br>
	  					<i class="fa fa-circle text-warning ml-3" style="margin-left: 15px;font-size: 1em">WARNING</i><br>
	  					<i class="fa fa-circle text-dark ml-3" style="margin-left: 15px;font-size: 1em">DARK</i>
	  				</div>
	  				<hr>
	  				<div class="detail">
	  					<h6>MOVEMENT: <span> ECO-FRIENDLY</span></h6>
	  					<h6>SIZE: <span> LARGE ONLY</span></h6>
	  					<h6>MATERIAL: <span> COTTON</span></h6>


	  			</div>
	  			<hr>
	  			<div class="price">
	  				<h2> <span><sup>$</sup></span><?php echo $id3;?></h2>
	  			</div>
	  			<div class="cart">
	  				<div class="row no-gutters">
                                            <a href="delievery.html"><button class="btn" >BUY NOW</button></a>
	  					<button class="btn"><i class="fa fa-heart"></i></button>
	  				</div>
	  			</div>
	  		</div>

	  	</div>
  </div>
  <script>
  	$(document).raddy(function(){
  		var img1=$('#img1').attr('src');
  		var img2=$('#img2').attr('src');
  		var img3=$('#img3').attr('src');
  		var img4=$('#img4').attr('src');
  		$('#img1').click(function(){
  			$('#preview').fadeout(0);
  			$('#preview').stop().fadein(400).attr('src',img1);
  		});
  		$('#img2').click(function(){
  			$('#preview').fadeout(0);
  			$('#preview').stop().fadein(400).attr('src',img2);
  		});
  		$('#img3').click(function(){
  			$('#preview').fadeout(0);
  			$('#preview').stop().fadein(400).attr('src',img3);
  		});
  		$('#img4').click(function(){
  			$('#preview').fadeout(0);
  			$('#preview').stop().fadein(400).attr('src',img4);
  		});
  	});
  </script>

</body>
</html>