<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
             <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['email'])) {
                ?>
                <li><a href = "confirm.php"><span class = "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                <li><a href = "settings.php?error="><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php
                }else {
                ?>
                <li><a href="signup.php?error="><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-list-alt"></span>About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                <?php
                }
                ?>
             </ul>
        </div>
    </div>
</div>
