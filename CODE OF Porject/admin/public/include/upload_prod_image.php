
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Product Image</h1>
                  <?php echo errors(); echo message(); ?>
              </div>
              <form class="user" action="functions/queries.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-12">
                      <input type="text" name="productid" value="<?php if(isset($_GET['img_prod_id'])){ echo $_GET['img_prod_id']; } ?>" hidden>
                    <input type="file" class="form-control form-control-user" name="fileToUpload" id="exampleLastName">
                  </div>
                </div>

                <button type="submit" name="upload_prod_image" class="btn btn-primary btn-user btn-block">
                 Upload
                  </button>
                <hr>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="?page=products_list">View list of products</a>
              </div>
              <div class="text-center">
                <a class="small" href="">Back to Home page</a>
              </div>
            </div>
          </div>
        </div>
