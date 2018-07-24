<?php
Session_start();
require("config.php");
$id=$_POST['n1'];
$pass=$_POST['p1'];
$result=mysqli_query($con,"select * from users where userid ='$id' and password='$pass' ");

if(mysqli_fetch_assoc($result)){
    $_SESSION['name']=$id;
    header("Location:album.php");
 
}else{
    header("location:index.php?msg1=sorry but userid and password did not match");
  
}

?>