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
        <title>Setting</title>
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="row" style="margin:80px 0px 200px 0px">
            <div class="col-xs-4 col-xs-offset-4">
                <h2>Change Password</h2>
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="opassword" required="required" placeholder="Old Password">
                        <div><?php echo $_GET['error']; ?></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="npassword" required="required" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="rpassword" required="required" placeholder="Re-enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>