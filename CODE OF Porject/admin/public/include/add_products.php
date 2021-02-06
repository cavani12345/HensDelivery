
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add a Product</h1>
                  <?php echo errors(); echo message(); ?>
              </div>
              <form class="user" action="functions/queries.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-1 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="prod_name" id="exampleFirstName" placeholder="Product Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="prod_weight" id="exampleLastName" placeholder="Product Weight">
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="prod_quantity" id="exampleInputEmail" placeholder="Quantity">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" class="form-control form-control-user" name="pro_image" id="exampleInputPassword" placeholder="Image file">
                  </div>
                  <div class="col-sm-6">
                      <textarea  class="form-control form-control-user" name="prod_description" id="exampleRepeatPassword" placeholder="Description here ..."></textarea>
                  </div>
                </div>
                <button type="submit" name="register_product" class="btn btn-primary btn-user btn-block">
                  Register Product
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
