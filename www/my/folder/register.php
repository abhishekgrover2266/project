<?php //include 'common.php'; ?>
<?php include('includes/header.php'); ?>
<style>
:focus {
  outline: none; }

.wrapper {
  min-height: 50vh;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center; }

.inner {
  min-width: 850px;
  margin: auto;
  padding-top: 68px;
  padding-bottom: 48px;
  background: url("../images/registration-form-2.jpg"); }
  .inner h3 {
    text-transform: uppercase;
    font-size: 22px;
    font-family: "Muli-Bold";
    text-align: center;
    margin-bottom: 32px;
    color: #333;
    letter-spacing: 2px; }

form {
  width: 50%;
  padding-left: 45px; }

.form-group {
  display: flex; }
  .form-group .form-wrapper {
    width: 50%; }
    .form-group .form-wrapper:first-child {
      margin-right: 20px; }

.form-wrapper {
  margin-bottom: 17px; }
  .form-wrapper label {
    margin-bottom: 9px;
    display: block; }

.form-control{
  border: 1px solid #ccc;
  display: block;
  width: 100%;
  height: 40px;
  padding: 0 20px;
  border-radius: 20px;
  font-family: "Muli-Bold";
  background: none; }
  .form-control:focus {
    border: 1px solid #ae3c33; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  padding-left: 20px; }
  select option[value=""][disabled] {
    display: none; }

btn_sponsor {
  border: none;
  width: 152px;
  height: 40px;
  margin: auto;
  margin-top: 29px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #ae3c33;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  border-radius: 20px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  btn_sponsor:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #f11a09;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  btn_sponsor:hover:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }

.checkbox {
  position: relative; }
  .checkbox label {
    padding-left: 22px;
    cursor: pointer; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 12px;
  width: 13px;
  border-radius: 2px;
  background-color: #ebebeb;
  border: 1px solid #ccc;
  font-family: Material-Design-Iconic-Font;
  color: #000;
  font-size: 10px;
  font-weight: bolder; }
  .checkmark:after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    content: '\f26b'; }

@media (max-width: 991px) {
  .inner {
    min-width: 768px; } }
@media (max-width: 767px) {
  .inner {
    min-width: auto;
    background: none;
    padding-top: 0;
    padding-bottom: 0; }

  contact_form {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; } }

/*# sourceMappingURL=style.css.map */

</style>
	<section id="register" style="background-image: url('img/247.jpg');">
		<div class="container">
		<div class="wrapper" style="background-image: url('img/registration-form-2.jpg');background-size:fit;">
			<div class="inner">
                            <form action="action.php" method="post" class="contact_form col-lg-12 col-sm-10" enctype="multipart/form-data">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Full Name</label>
                                                        <input type="text"  name="register_name" class="form-control"  required>
						</div>
						<div class="form-wrapper">
							<label for="">Phone Number ( Should be in proper format )</label>
                                                        <input type="text" pattern="[789][0-9]{9}" maxlength="11" minlength="10"  name="register_contact" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age</label>
                                                        <input type="text" name="register_age" class="form-control" required>
						</div>
						<div class="form-wrapper">
							<label for="">City</label>
                                                        <input type="text" name="register_city"  class="form-control" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
                                                <input type="email" name="register_email" class="form-control"  required>
					</div>
					<div class="form-wrapper">
						<label for="">Address</label>
                                                <textarea class="form-control" minlength="10" maxlenght="500"  name="register_adress" required></textarea>
					</div>
					<div class="form-wrapper">
						<label for="">Where did you heared about this contest?</label>
                            <textarea class="form-control" name="register_hear" minlength="10" maxlenght="100" required></textarea>
					</div>
					<div class="form-wrapper">
						<label for="">Do you want to participate?</label>
                              <input type="text" name="register_participate"class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label for="">Upload Half & Full Size Photo /Max-Size:2MB</label>
                                <input type="file" name="register_img1" class="form-control" required>
                                <input type="file" name="register_img2" class="form-control" required>
					</div>
					<div class="checkbox">
						<label>
							 By filling this form you are accepting our Terms of Use & Privacy Policy.
						</label>
					</div>
                       <input type="submit" style="border:solid 1px #000;"name="register_submit" class="btn_sponsor btn" value="Submit">
				</form>
			</div>
		</div>
	</div>
	</section>
<?php include('includes/footer.php'); ?>
