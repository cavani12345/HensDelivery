<?php
include("session.php");
include("connection.php");
include("functions.php");


if(isset($_GET['update_qty'])){
    $id = $_SESSION['id'];
    $product = $_GET['update_qty'];
    $qty = $_GET['qty'];
if(!empty($product) && !empty($id) && !empty($qty)){
        $update_qty = "UPDATE shoppingcart SET cartquantity = '$qty' WHERE productid = '$product' AND id = '$id'";
        $run_update_qty = mysqli_query($conn, $update_qty);
        
    $_SESSION['message'] = "Quantity has been updated successfully!";
    redirect_to("../cart.php");  
    }
}
if(isset($_GET['del_prod_id'])){
    $id = $_SESSION['id'];
    $del_prod = $_GET['del_prod_id'];
    if(!empty($del_prod) && !empty($id)){
        $del_cart = "DELETE FROM shoppingcart WHERE productid = '$del_prod' AND id = '$id'";
        $run_del_cart = mysqli_query($conn, $del_cart);
        
    $_SESSION['message'] = "Item has been removed successfully!";
    redirect_to("../cart.php");  
    }
}
if(isset($_GET['cancel_cart'])){
    $id = $_SESSION['id'];
    if(!empty($id)){
        $del_cart = "DELETE FROM shoppingcart WHERE id = '$id'";
        $run_del_cart = mysqli_query($conn, $del_cart);
        
    $_SESSION['message'] = "Cart has been canceled. You can now select other products!";
    redirect_to("../products.php");  
    }
}
if(isset($_GET['checkout'])){
    if(empty($_SESSION['clientid'])){
     
    $_SESSION['erros'] = "Please login to continue!";
        $_SESSION['order'] = 'on';
        
    redirect_to("../login.php");  
        
    }
    else{
        function getTransactionId() {
		$n=8;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-/:$#@^*(_!&-';
		$randomString = '';

		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}

		return $randomString;
	}
    }
    
    $transaction = getTransactionId();
    $_SESSION['trans_id'] = $transaction;
    $id = $_SESSION['id'];
    $quer = "SELECT * FROM shoppingcart WHERE id='$id'";
    $rn = mysqli_query($conn, $quer);
    while($data = mysqli_fetch_assoc($rn)){
        $clientid = $_SESSION['clientid'];
        $produc = $data['productid'];
        $order_qty = $data['cartquantity'];
    $queryi = "INSERT INTO orderitem (productid, orderquantity, clientid, trans_id) VALUES ('$produc', '$order_qty', '$clientid', '$transaction')";
    $Run = mysqli_query($conn, $queryi);   
    }
    $d = "DELETE FROM shoppingcart WHERE id = '$id'";
    $rq = mysqli_query($conn, $d);
    $_SESSION['message'] = "View report!";
    redirect_to("../report.php");  
}
if(isset($_POST['Login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select="select * from client;";
    $query=mysqli_query($conn,$select);
   if( $query)
   {
       while($rows=(mysqli_fetch_array( $query)))
       {
           $user=$rows['email'];
           $pass=$rows['password'];
           if( $username==$user &&  $password==$pass)
           {
               
               $_SESSION['clientid'] = $rows['clientid'];
               $_SESSION['fname'] = $rows['fname'];
               $_SESSION['lname'] = $rows['lname'];
               
    $_SESSION['message'] = "Login successfully!";
    redirect_to("../cart.php");  
               
           }
           else
           {
    $_SESSION['errors'] = "Incorrrect email or password!";
    redirect_to("../login.php");  
           }
       }
   }
}
?>