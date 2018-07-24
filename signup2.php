<?php
require("config.php");
$id=$_POST['n1'];
$pass=$_POST['p1'];
$name=$_POST['h1'];
$result =mysqli_query($con,"select * from users where userid ='$id'");
if(mysqli_fetch_assoc($result)){
header("location:signup.php?msg2=username already exists");
}else{

    $result2=mysqli_query($con,"insert into users (name,userid,password) values('$name','$id','$pass')");
  
    header("location:signup.php?msg3=signed in sucessfully <br> now you are ready to login..");
}
?>