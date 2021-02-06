<?php include("session.php"); ?>
<?php include("connection.php"); ?>
<?php include("functions.php"); ?>
<?php
if(isset($_SESSION['prod_id']) && isset($_GET['qty'])){
    $prod_id = $_SESSION['prod_id'];
    $qty = $_GET['qty'];
    $id = $_SESSION['id'];
    $_SESSION['prod_id'] = null;
    $sel = "SELECT * FROM shoppingcart WHERE productid = '$prod_id' AND id = '$id'";
    $r = mysqli_query($conn, $sel);
    $count = mysqli_num_rows($r);
    if($count == 0){
    $add = "INSERT INTO shoppingcart (cartquantity, productid, id) VALUES ('$qty', '$prod_id', '$id')";
    $run_add = mysqli_query($conn, $add);
    }
    else{
    $_SESSION['errors'] = "Product has been selected before!!!";
    redirect_to("../products.php");  
    }
    $_SESSION['message'] = "Congratulations, well done! Image has been updated successfully";
    redirect_to("../products.php");  
}
elseif(isset($_GET['prod_id'])){
$prod_id = $_GET['prod_id'];
$qty = 1;
$id = $_SESSION['id'];
        $sel = "SELECT * FROM shoppingcart WHERE productid = '$prod_id' AND id = '$id'";
    $r = mysqli_query($conn, $sel);
    $count = mysqli_num_rows($r);
    if($count == 0){
    $add = "INSERT INTO shoppingcart (cartquantity, productid, id) VALUES ('$qty', '$prod_id', '$id')";
    $run_add = mysqli_query($conn, $add);
    }
    else{
    $_SESSION['errors'] = "Product has been selected before!!!";
    redirect_to("../products.php");  
    }
    $_SESSION['message'] = "Congratulations, well done! Image has been updated successfully";
    redirect_to("../products.php");  
}
?>