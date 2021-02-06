<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Products List</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Weight</th>
                      <th>Quantity</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$pro_list = "SELECT * FROM product";
$run_pro_list = mysqli_query($conn, $pro_list);
while($rows = mysqli_fetch_assoc($run_pro_list)){
    $pro_name = $rows['proname'];
    $pro_weight = $rows['weight'];
    $pro_quantity = $rows['proquantity'];
    $pro_img = $rows['propic'];
    $pro_desc = $rows['description'];
?>
                      
                    <tr>
                      <td><?php echo $pro_name; ?></td>
                      <td><img src="../photos/<?php echo $pro_img; ?>" style="width: 50px;"></td>
                      <td><?php echo $pro_weight; ?></td>
                      <td><?php echo $pro_quantity; ?></td>
                      <td><?php echo $pro_desc; ?></td>
                        <td><div class="btn-group"><a href="?page=add_product_image&img_prod_id=<?php echo $rows['productid']; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Image</a><a href="?page=add_product_image&img_prod_id=<?php echo $rows['productid']; ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Remove</a></div></td>
                    </tr>
 <?php
}
    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>