<?php
Session_start();
require("config.php");
$name=$_POST['name'];
$album=$_POST['album'];
$year=$_POST['year'];
mysqli_query($con,"delete from photo where albumname ='$album' and year='$year' and img_name='' ");
$img_name=$_FILES['s']['name'];
//$type=$_FILES['s']['type'];
if (move_uploaded_file($_FILES['s']['tmp_name'],"pics/".$img_name)) {
    $result=mysqli_query($con, "insert into photo (name,albumname,year,img_name) values('$name','$album','$year','$img_name')");
    if ($result) {
        header("location:photos.php?album=".$album."&year=".$year);
    }
}
else 
echo "no photo uploaded ".$_FILES['s']['error'];
?>