<div class="container">
  <div class="shopping-cart">
    <div class="shopping-cart-header">
        <div class="row">
        <div class="col-md-3"><a><i class="fa fa-shopping-cart cart-icon" id ="cart"></i><span class="badge"><?php $id = $_SESSION['id']; if(number_of_cart_items($id) > 0){ echo number_of_cart_items($id); } ?></span></a></div>
        <div class="col-md-3">
      <div class="shopping-cart-total hidden-xs">
        <span class="lighter-text" >Total: $<?php $id = $_SESSION['id']; if(tot_cart_amount($id) > 0){ echo tot_cart_amount($id); } ?></span>
      </div>
            </div></div>
    </div> <!--end shopping-cart-header -->
    <ul class="shopping-cart-items" >
        <h4>Selected Items</h4><hr>
<?php
    $pric = 0;
    $qtyy = 0;
   
$id = $_SESSION['id'];
$produ = "SELECT * FROM shoppingcart,product WHERE shoppingcart.productid = product.productid AND shoppingcart.id='$id'";
$run_produ = mysqli_query($conn, $produ);
while($row = mysqli_fetch_assoc($run_produ)){
    $pric = $row['price'];
    $qtyy = $row['cartquantity'];
    
    $toto = $pric*$qtyy;
    
?>
      <p class="clearfix">
        <img src="photos/<?php echo $row['propic']; ?>" alt="<?php echo $row['proname']; ?>" style="width: 50px" />
        <span class="item-name"><?php echo $row['proname']; ?></span>
        <span class="item-price">$ <?php echo $toto; ?></span>
        <span class="item-quantity"> | <?php echo $row['cartquantity']; ?></span>
        <span class="item-quantity"><a href="functions/queries.php?del_prod_id=<?php echo $row['productid']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i></a></span>
      </p>
        <hr>
<?php
}
?>

      <a href = "cart.php" class="btn btn-primary checkout">Checkout</a>
    </ul>
  </div> <!--end shopping-cart -->
                        </div>