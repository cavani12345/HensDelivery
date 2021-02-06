
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hens Products Delivery</title>
  <link rel="stylesheet" href="style/assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="style/assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="style/assets/jquery-3.3.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../style/css/css.css">  
    <script src="style/js/bootstrap.min.js"></script>
          <script>
    function register(){
        var x1=document.getElementById("fname").value;
        var x2=document.getElementById("lname").value;
        var x3=document.getElementById("email").value;
        var x4=document.getElementById("tel").value;
        var x5=document.getElementById("idnumber").value;
        var x6=document.getElementById("country").value;
        var x7=document.getElementById("pass1").value;
        var x8=document.getElementById("pass2").value;
        
        if(x1==""||x2==""||x3==""||x4==""||x5==""||x6==""||x7==""||x8==""){
            alert("please fill all field correctly");
            return false;
        }
       if(x7!=x8){
            alert("confirmation password must be the same as created password");
           return false;}
       
        else{
            return true;
        }
    }
    </script>
    </head>
<body>
    <div class="client-form" style="margin-left:25%;margin-right:25%;padding:20px">
        <div class="form-group" style="height:30px;width:100%"><img src="photos/layout/ONLINE2.jpg"></div>
        <form method="post" action="insert.php"style="padding:2%;background:whitesmoke;text-align:center;box-shadow: 1px -1px 7px 2px #d8900c;" onsubmit="register()">
            <label><h3>CREATE YOUR ACCOUNT ON HENS PRODUCT DELIVERY</h3></label><br>
            <div class="form-group ">
            <td><label>First name</label></td><br><td><input type="text"id="fname" name="fname" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
            <td><label>Last name</label></td><br><td><input type="text"id="lname" name="lname" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
            <td><label>E-mail</label></td><br><td><input type="email"id="email" name="email"></td><br><br>  
            </div>
            <div class="form-group ">
            <td><label>Tel number</label></td><br><td><input type="phone"id="tel"placeholder="eg:+250....." name="phone" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
            <td><label>Id number</label></td><br><td><input type="text"id="idnumber" name="id" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
            <td><label>country</label></td><br><td><input type="text"id="country" name="country" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
            <td><label>create password</label></td><br><td><input type="password"id="pass1" name="password" class="form-control"></td><br><br>
            </div>
            <div class="form-group ">
                <td><label>Confirm password</label></td><br><td><input type="password"id="pass2" placeholder="the same as above...." name="pass2"></td><br><br></div>
                <div class="form-group ">
            <td><label><input type="submit" class="btn-btn-primary" style="background-color: #6fdac9;"value="submit" name="submit" class="btn btn-primary"></label></td><td><button type="reset"style="background-color: #de915f;color: #fbfbfa;">reset</button></td><br><br>
                </div>
            <p><label>already have an account?:login<a href="login.php"> here</a></label></p><br>
   </form>
    </div>
     <div class="container-fluid">
<footer class="row bg-dark" style="height: auto;color:white; text-align: center;">

        <div class="col-md-4"><h3>Pages</h3><hr>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
    </div>
        <div class="col-md-4"><h3>our service</h3><hr>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
    
    </div>
        <div class="col-md-4"><h3>Quick link</h3><hr>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
    
    </div>
        <div class="container-fluid" style="padding: 20px; text-align: center; color: white; background: black; font-weight: bold; size: 16px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                This system was designed by Group 8 &copy;right 2019 All rights reserved
                    </div>
                </div>
</footer>

            </div>

    
    </body>

</html>