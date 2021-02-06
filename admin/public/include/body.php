<?php
if(isset($_GET['page'])){
    if($_GET['page'] == "add_products"){
        include("public/include/add_products.php");
    }
    elseif($_GET['page'] == "products_list"){
        include("public/include/products_list.php");
    }
    elseif($_GET['page'] == "my_account"){
        include("public/include/my_account.php");
    }
    elseif($_GET['page'] == "add_product_image"){
        include("public/include/upload_prod_image.php");
    }
    else{
           include("public/include/pageerror.php");
    }
}
else{
    echo "Welcome to Hens Product Delivery!!!!";
}
?>