<html>
<?php include("public/include/head.php"); ?>
    <body>
        <div class="container">
<?php include("public/include/header_page.php"); ?>
<!-------------products here-------->
<hr>
            <h3 class="section-title"><?php if(isset($_SESSION['clientid'])){ echo "Welcome ".$_SESSION['lname']." ".$_SESSION['lname']; }else{ echo "My cart"; } ?>, This is your report<a id="print" onclick="printDiv('printable')" href="#" class="btn btn-xs btn-success pull-right"><i class="fa fa-print"></i></a></h3>
            <?php echo message(); echo errors(); ?>
<hr>            
           
<table class="container">
<div class="row">
    
<div class="table-responsive" id="printable">
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
          $tr = $_SESSION['trans_id'];
$produ = "SELECT * FROM orderitem, product WHERE orderitem.productid = product.productid AND orderitem.trans_id='$tr'";
$run_produ = mysqli_query($conn, $produ);
          $sum = 0;
          $i = 1;
while($row = mysqli_fetch_assoc($run_produ)){
    $pric = $row['price'];
    $qtyy = $row['orderquantity'];
    
    $toto = $pric*$qtyy;   
    $sum+=$toto;
?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><img src="photos/<?php echo $row['propic']; ?>" style="img-responsive" height="70"></td>
          <td><?php echo $row['proname']; ?></td>
          <td>$ <?php echo $row['price']; ?></td>
            <td><?php echo $qtyy; ?></td>
          <td><?php echo $toto; ?></td>
          <td><?php echo $row['trans_id']; ?></td>

        </tr>
<?php $i++;
}
?>
      </tbody>
    </table>
  </div>
      
<!---------------------------------->            
        </div>
    
    
    
    
    
    
    
    
            <div class="container-fluid">
<?php include("public/include/footer.php"); ?>
<script>
		function printDiv(printable){
			var printContents = document.getElementById(printable).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
</script>
            </div>
    </body>
</html>