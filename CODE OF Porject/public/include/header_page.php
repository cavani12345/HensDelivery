<style>
    @media screen and (min-width: 480px) {

}
</style>           
<div class="row">
                <div class="col-md-4">
                    <div class="logo">
                    <img src="photos/layout/ONLINE2.jpg" class="logo-img">
                    </div>
                </div>
                <div class="col-md-4">
                <form class="search" method="post">
                    <div class="input-group btn-group">
                    <input type="text" class="form-control" placeholder="Search Item . . .">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Search</button>
                    </div>
                    
                </form>
                </div>
                <div class="col-md-4">
                    <div class="row log-reg">
                    <div class="col-md-6">
<?php include("public/include/shopping_cart.php"); ?>
                        </div>
                    <div class="col-md-6">
                        <div class="btn-group pull-right" style="z-index: 2">
                            <a href="public/include/login.php" button class="btn btn-primary btn-md"><i class="fa fa-key"></i> Login</a>
                            <a href="public/include/register.php" class="btn btn-primary btn-md"><i class="fa fa-sign-in"></i> Register</a>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
<?php include("public/include/nav_bar.php"); ?>