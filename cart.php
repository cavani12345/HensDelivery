<html>
<?php include("public/include/head.php"); ?>
    <body>
        <div class="container">
<?php include("public/include/header_page.php"); ?>
<!-------------products here-------->
<hr>
            <h3 class="section-title"><?php if(isset($_SESSION['clientid'])){ echo "Welcome ".$_SESSION['lname']." ".$_SESSION['lname']; }else{ echo "My cart"; } ?></h3>
            <?php echo message(); echo errors(); ?>
<hr>            
           
<table class="container">
<div class="row">
    
<div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Name</th>
          <th>Unit price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
<?php
$produ = "SELECT * FROM shoppingcart, product WHERE shoppingcart.productid = product.productid AND shoppingcart.id='$id'";
$run_produ = mysqli_query($conn, $produ);
          $sum = 0;
while($row = mysqli_fetch_assoc($run_produ)){
    $pric = $row['price'];
    $qtyy = $row['cartquantity'];
    
    $toto = $pric*$qtyy;   
    $sum+=$toto;
?>
        <tr>
          <td>1</td>
          <td><img src="photos/<?php echo $row['propic']; ?>" style="img-responsive" height="70"></td>
          <td><?php echo $row['proname']; ?></td>
          <td>$ <?php echo $row['price']; ?></td>
            <td><form method="get" action="functions/queries.php"><input type="text" name="update_qty" value="<?php echo $row['productid']; ?>" hidden><div class="row" style="margin:5px"><input type="number" name="qty" value="<?php echo $qtyy; ?>" class="form-control col-md-10"><button type="submit" class="btn btn-success pull-right col-md-2"><i class="fa fa-check-circle"></i></button></div></form></td>
          <td><?php echo $toto; ?></td>
          <td><div class="btn-group">
            <a href="functions/queries.php?del_prod_id=<?php echo $row['productid']; ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Remove</a>
              </div></td>

        </tr>
<?php
}
?>
      </tbody>
    </table>
  </div>
      
   <div class="container-fluid" style="margin-bottom: 40px;">        
  <div class="row">
      <div class="btn-group pull-right" style="margin-left: 40%;">
          Total:
          <input type="text" name="total" value="$ <?php echo $sum; ?>" class="form-control" disabled>
          <a href="functions/queries.php?checkout" class="btn btn-success"><i class="fa fa-check-circle"></i> Checkout</a>
          <a href="products.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Back to shop</a>
          <a href="functions/queries.php?cancel_cart" class="btn btn-info"><i class="fa fa-times-circle"></i> Cancel</a>
          
      </div>
    </div> 
    </div>
<!---------------------------------->            
        </div>
    
    
    
    
    
    
    
    
            <div class="container-fluid">
<?php include("public/include/footer.php"); ?>

            </div>
    </body>
</html>