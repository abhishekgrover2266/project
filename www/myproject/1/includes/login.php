<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">LOGIN</h2>
      </div>
      <div class="modal-body">
          <p>Don't have an account?<a href='signup.php?error='>Register</a></p>
        <form method="post" action="login_submit.php">
	<div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control" required="required">
	</div>
	<div class="form-group">
	<input type="password" name="password" placeholder="Password" class="form-control" required="required">
	</div>
	<button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
          <div><br><a href="">Forgot Password?</a></div>
	</div>    
      </div>
      </div>
    </div>

