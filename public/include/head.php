<?php include("functions/session.php"); ?>
<?php include("functions/connection.php"); ?>
<?php include("functions/functions.php"); ?>
<?php
if(!isset($_SESSION['id'])){
    function getId() {
		$n=8;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-/:$#@^*(_!&-';
		$randomString = '';

		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}

		return $randomString;
	}
    $_SESSION['id'] = getId();
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hens Products Delivery</title>
    
    <link rel="stylesheet" href="style/assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="style/assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="style/assets/jquery-3.3.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="style/css/css.css">  
    <script type="text/javascript" src="style/js/popper.min.js"></script>
   
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ce546466a66a57a"></script>-->

    </head>