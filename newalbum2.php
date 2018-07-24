
<?php
session_start();
$name=$_SESSION['name'];
require("config.php");
$year=date('M Y');
$album=$_POST['n'];
$result=mysqli_query($con,"select  * from photo where albumname='$album' and year='$year';");
if($row=mysqli_fetch_assoc($result)){
    header("Location:newalbum.php?ms=Album with this name already exists ");
}else{
$result2=mysqli_query($con,"insert into photo (name,albumname,year) values('$name','$album','$year')");    
header("Location:newalbum.php?ms=Album created sucessfully! ");
}
?>