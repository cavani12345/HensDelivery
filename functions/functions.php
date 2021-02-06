<?php
function redirect_to($location){
    header("Location: $location");
    exit;
}
function currency($value){
    if($value > 999){
    $new_val = number_format($value, '0', '.', ',');
    return $new_val;
    }
    else{
    return $value;
    }
}
function number_of_cart_items($id){
    global $conn;
    $rows = 0;
    $query = "SELECT * FROM shoppingcart WHERE id = '$id'";
    $run = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($run);
    return $rows;
}
function tot_cart_amount($id){
    global $conn;
    $totamount = 0;
    $query = "SELECT * FROM shoppingcart, product WHERE shoppingcart.productid = product.productid AND shoppingcart.id = '$id'";
    $run = mysqli_query($conn, $query);
    while($rows = mysqli_fetch_assoc($run)){
        $qty = $rows['cartquantity'];
        $price = $rows['price'];
        $totprice = $qty*$price;
        $totamount += $totprice;
    }

    return $totamount;
}
?>