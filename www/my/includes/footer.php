<footer class="section footer-classic context-dark bg-image" style="background: #000;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-xl-12 col-sm-12">
				<div style="text-align:center;">
					<p style="font-weight: bold;font-size: 18;color: deeppink;padding-left: 80px">EF_CREW</p>
					<h1 style="font-family:  var;color: white;margin-top: -15px">CONTACT-US</h1>
					<ul class="footer_ul">
						<li class="footer_li">PHONE: <span><br><a href="tel:+91-9541559426">+91-9541559426</a>, &nbsp;<a href="tel:+91-9485712392">+91-9485712392</a></span></li>
						<li class="footer_li">Email: <span><br><a href="mailto:fashioncreelite@gmail.com">fashioncrewelite@gmail.com</a></span></li>
						<li class="footer_li">Address: <span><br>OFFICE NO.2, MODEL-TOWN,KARNAL</span></li>
					</ul>
				</div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">
                <form style="width:100%;" action="contact_script.php" method="post">
					<div class="col-md-6">
						<div class="form-group">
							<input class="form-control" name="NAME" placeholder="FULL NAME" type="text" required="required">
						</div>
						<div class="form-group">
							<input class="form-control" name="email" placeholder="EMAIL ADDRESS" type="text" required="required"  >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input class="form-control" name="PHONE" placeholder="PHONE NUMBER" type="text" required="required"  >
						</div>
						<div class="form-group">
							<input class="form-control" name="CITY" placeholder="CITY" type="text" required="required">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea cols="100" rows="5" class="form-control" name="message" required="required" placeholder="MESSAGE"></textarea>
						</div>
					</div>
					<button class=" btn btn-succes main_button" name='submit' href="index.php" type="submit">submit</button>
				</form>
            </div>
          </div>
        </div>
		<p style="font-family: var;color: white;text-align:center;font-size: 18px;margin-top: 30px">COPYRIGHT 2020 ALL RIGHT RESERVED.</p>
      </footer>
	
   </body>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://kit.fontawesome.com/4af418f6ae.js" crossorigin="anonymous"></script>
      <script type="text/javascript">
	jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 5000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 2
    },

    600: {
      items: 2
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
</script>
	  <script>

// optional
		$('#blogCarousel').carousel({
				interval: 5000
		});
</script>
 

<script>
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>
</html>

