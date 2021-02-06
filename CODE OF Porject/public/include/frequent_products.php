<div class="row">
<?php
    $freq = "SELECT * FROM product LIMIT 4";
    $run_freq = mysqli_query($conn, $freq);
    while($freq_rows = mysqli_fetch_assoc($run_freq)){
        $prod_img = $freq_rows['propic'];
        $pro_name = $freq_rows['proname'];
        $description = $freq_rows['description'];
?>
    <div class="col-md-3">
<div class="cat">
                <center>
                    <a href="product_details.php?pro_id=<?php echo $freq_rows['productid']; ?>">
                        <img src="photos/<?php echo $prod_img; ?>" class="img-responsive cat-item" />
                    </a>
                </center>
                
     <div class="row">
         <div class="item-cat-title"><a href="product_details.php?pro_id=<?php echo $freq_rows['productid']; ?>"><?php echo $pro_name; ?></a></div>
         <div class="item-cat-desc">
           <?php echo $description; ?>
             <a href="functions/addcart.php?prod_id=<?php echo $freq_rows['productid']; ?>" class="btn btn-primary" style="width: 100%;"><i class="fa fa-shopping-cart"></i> Add Cart</a> 
         </div>
                  
                </div>  
            
</div>
        </div>
 <?php
    }
?>
            
</div>