<html>
<?php include("public/include/head.php"); ?>
    <style>
        .det-val{
            font-weight: bold;
            color: #964d03;
        }
        .det-title{
            font-weight: bold;
            color: black;
        }
    </style>
    <body>
        <div class="container">
<?php include("public/include/header_page.php"); ?>
<!-------------products here-------->
<hr>
            <h3 class="section-title">Product details</h3>
<hr>            
<?php
if(isset($_GET['pro_id'])){
    $product = $_GET['pro_id'];
    $_SESSION['prod_id'] = $product;
$produ = "SELECT * FROM product WHERE productid = '$product'";
$run_produ = mysqli_query($conn, $produ);
if($row = mysqli_fetch_assoc($run_produ)){
?>
<div class="row" style="margin-bottom: 20px;">
    <div class="col-md-7">
        <div class="cart" style="width: 100%; height: auto; margin-bottom: 20px;">
            <img src="photos/<?php echo $row['propic']; ?>" style="width: 100%; height: 400px; border-radius: 5px;">
        </div>
<div class="container">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Descriptions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Review</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h4>Descriptions</h4>
      <div><?php echo $row['description']; ?></div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h4>Review</h4>
      <div>
       <form>
           <div class="row">
          <label class="col-md-4">Names</label>
               <div class="col-md-8">
                   <input type="text" name="names" placeholder="Enter your names" class="form-control">
               </div>
           </div><hr>
           <div class="row">
          <label class="col-md-4">Email</label>
               <div class="col-md-8">
                   <input type="text" name="email" placeholder="Enter your email" class="form-control">
               </div>
           </div><hr>
           <div class="row">
          <label class="col-md-4">Write Reviw</label>
               <div class="col-md-8">
                   <textarea class="form-control" placeholder="Text here ..." name="review"></textarea>
               </div>
           </div><hr>
           <div class="row">
          <label class="col-md-4"></label>
               <div class="col-md-8">
                   <button type="submit" name="send_review" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o"></i> Send</button>
               </div>
           </div>
        </form> 
        
        </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-5">
    <div>
        <p>
        </p>
        <form action="functions/addcart.php?prod_id=<?php echo $row['productid']; ?>" method="get">
        <div>
        <div class="row"><div class="col-md-6 det-title">Tile</div><div class="col-md-6 det-val"><?php echo $row['proname']; ?></div></div><hr>
        <div class="row"><div class="col-md-6 det-title">Weight</div><div class="col-md-6 det-val"><?php echo $row['weight']; ?> Kg</div></div><hr>
        <div class="row"><div class="col-md-6 det-title">Minimum order</div><div class="col-md-6 det-val">20</div></div><hr>
        <div class="row"><div class="col-md-6 det-title">Quantity</div><div class="col-md-6 det-val"><input class="form-control" type="number" width="5" value="2" name="qty" id="qty" onchange="calculate(<?php echo $row['price']; ?>);"></div></div><hr>
        <div class="row"><div class="col-md-6 det-title">Price</div><div class="col-md-6 det-val">$ <label id="tot-result"></label></div></div><hr>
        </div>
        
        
            
        <div class="btn-group pull-right">
            <a href="products.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back to shop</a>
            <button type="submit" name="addcart" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add Cart</button>
        </div>
        </form>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <!--<div class="addthis_inline_share_toolbox"></div>-->
        
    </div>
        
    </div>
            </div>       
            
     <?php }} ?>       
<!---------------------------------->            
        </div>
    
    
    
    
    
    
    
    
            <div class="container-fluid">
<?php include("public/include/footer.php"); ?>

            </div>
<script>
    function calculate(unitPrice){
var qty = document.getElementById("qty").value;
var price = unitPrice;
var sum = qty*price;
    document.getElementById("tot-result").innerHTML=sum;
    }
        </script>
    </body>
</html>