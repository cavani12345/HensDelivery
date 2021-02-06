
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style/assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="style/assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="style/assets/jquery-3.3.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="style/css/css.css">  
    <script src="style/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px;
        text-align: center;
        margin-left: 35%;
        margin-right: 25%;
        box-shadow: 0 0 8px #e8bd47;
        margin-top: 10%;
        background: whitesmoke}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login_process.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="username" class="form-control" value="<?php  $username; ?>">
                <span class="help-block"><?php  ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php   ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>