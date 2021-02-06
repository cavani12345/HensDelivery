<?php
include("session.php");
include("connection.php");
include("functions.php");

if(isset($_POST['register_product'])){
    $prod_name = $_POST['prod_name'];
    $prod_weight = $_POST['prod_weight'];
    $prod_quantity = $_POST['prod_quantity'];
    $pro_image = $_POST['pro_image'];
    $prod_description = $_POST['prod_description'];
    
    if(empty($prod_name) || empty($prod_weight) || empty($prod_quantity) || empty($prod_description)){
        $_SESSION['errors'] = "Please fill all fields!";
        redirect_to("../?page=add_products");
    }
    else{
        $add_prod = "INSERT INTO product (proname, weight, proquantity, description) VALUES ('$prod_name', '$prod_weight', '$prod_quantity', '$prod_description')";
        
        $run_add_prod = mysqli_query($conn, $add_prod);
        if($run_add_prod){
        $_SESSION['message'] = "Data saved successfully!";
        redirect_to("../?page=add_products");
        }
        else{
        $_SESSION['errors'] = "Failed to save the product!";
        redirect_to("../?page=add_products");
        }
    }
}



if(isset($_POST['upload_prod_image'])){
$prod_id = $_POST['productid'];
if(empty($prod_id)){
    $_SESSION['errors'] = "Please select product!";
        redirect_to("../?page=products_list");  
}  
   
$target_dir = "../../photos/products/";
    $filed = "products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_name = $filed.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //get image dimensions
/* list($width, $height, $type, $attr) = getimagesize("$file_name");
if($width < 1000){
    $_SESSION['errors'] = "Image is too small! 1000 kbs";
        redirect_to("../user/?route=$location_asset_type");
            $_SESSION['asset_type_location'] = NULL;
}    */
    
    
    
// Check if image file is a actual image or fake image
   if(basename($_FILES["fileToUpload"]["name"]) == ""){
    $_SESSION['errors'] = "Please, select image file to upload!";
       redirect_to("../?page=add_product_image&img_prod_id=$prod_id");
    $uploadOk = 0;
}
    else{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $_SESSION['message'] = "File is an image - " . $check["mime"];
        $uploadOk = 1;
    } else {
        $_SESSION['errors'] = "File is not an image.";
        redirect_to("../?page=add_product_image&img_prod_id=$prod_id");
        $uploadOk = 0;
    }
    /*if($_POST['fileToUpload'] == ""){
   echo "Sorry, select image to upload!";    
    $uploadOk = 0;
    }*/
// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['errors'] = "Sorry, file already exists.";
    $uploadOk = 0;
    redirect_to("../?page=add_product_image&img_prod_id=$prod_id");
}
// Check file size
if ($_FILES["default_img"]["size"] > 20000000) {
    $_SESSION['errors'] = "Sorry, your file is too large.";
    $uploadOk = 0;
    redirect_to("../?page=add_product_image&img_prod_id=$prod_id");
}
// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['errors'] = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    redirect_to("../?page=add_product_image&img_prod_id=$prod_id");
} else {

$qry_ = "SELECT * FROM product WHERE propic = '$file_name'";
$st_ = mysqli_query($conn, $qry_);
$rows_av = mysqli_num_rows($st_);
    if($rows_av >= 1){
        $av_file = mysqli_fetch_assoc($st_);
        $av_img = $av_file['propic'];
        $unlinkpath = "../../photos/".$av_img;
        unlink($unlinkpath);
    }

   
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['message'] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//database

    date_default_timezone_set('Africa/Kigali');
    $todaydate = date('y-m-d H:i:s');
      $query_temp = "UPDATE product SET propic = '$file_name' WHERE productid = '$prod_id'";
      $st_temp = mysqli_query($conn, $query_temp);
      $_SESSION['message'] = "Congratulations, well done! Image has been updated successfully";
        redirect_to("../?page=products_list");  
    } else {
            $_SESSION['errors'] = "Sorry! There was an error during upload, Please try again";
        redirect_to("../?page=products_list");  
    }       


}
}


}
?>