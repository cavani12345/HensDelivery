<?php
include("connection.php");


if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$country=$_POST['country'];
$password=$_POST['password'];
$pass1=$_POST['pass2'];
     if($fname == ""){
        echo '<script>alert("Enter first name")</script>';
    }
    elseif($lname == ""){
        echo '<script>alert("Enter last name")</script>';
    }
    elseif($email == ""){
        echo '<script>alert("Enter email")</script>';
    }
    elseif($phone == ""){
        echo '<script>alert("Enter phone")</script>';
    }
    elseif($id == ""){
        echo '<script>alert("Select date of birth")</script>';
    }
    elseif($country==""){
        echo '<script>alert("insert your country")</script>';
    }
    elseif($password==""){
        echo '<script>alert("insert your password")</script>';
    }
    else{
$insert="insert into client(fname,lname,email,telephone,idnumber,country,password,passwordconf)values('$fname','$lname','$email','$phone','$id','$country','$password','$pass1');";
        $client=mysqli_query($conn,$insert);
        if(!$client){
            echo "failed";
        }
        else{
            echo '<script>alert("recorded well");</script>';
            header("location:../../login.php");
        }
    }
}
?>