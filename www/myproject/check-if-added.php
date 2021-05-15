<?php
function check_if_added_to_cart($item_id){
    $con= mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    $user_id=$_SESSION['id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status = 'Added to cart'";
    $qresult=mysqli_query($con,$query) or die(mysqli_error($con));
    if(mysqli_num_rows($qresult)>=1){
        return 1;
    }else{
        return 0;
    }
}
?>