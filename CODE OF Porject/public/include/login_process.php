<?php
include("connection.php");
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
               echo "your username:".$user."<br>";
               echo "your password:".$pass;
               
           }
           else
           {
               echo "username and password doesn't much";
           }
       }
   }
}
?>