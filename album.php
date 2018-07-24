<?php include("header.php");?>
<head><link rel="stylesheet" type="text/css" href="css/style2.css"></head>
<body>

<center><div style="width:25%;"><a  href="newalbum.php"><h1 style="border-bottom:2px dashed red;color:grey;">Create new album</h1></a></div></center>
<div id="m"><center>
<?php
require("config.php");
$name=$_SESSION['name'];
$result=mysqli_query($con,"select distinct albumname ,img_name,year from photo where name='$name' ;");
while($row=mysqli_fetch_assoc($result)){

    ?>
<div class="row"><div class="box">
    <div class="albm"><a href="photos.php?album=<?php echo $row['albumname'] ?>&year=<?php  echo $row['year'];?>"> <img src="pics/<?php echo $row['img_name'] ?>" alt="add images"></a> </div>
    <div class="ttl"><?php echo $row['albumname']."_".$row['year'] ?></div>
</div></div>
<?php
}
?></center></div>
<div class="list"><div class="l"><center><h2><u> Freinds album</u></h2></center> <ul>
<?php

$result2=mysqli_query($con,"select distinct name from photo where name!='$name'");
while ($row2=mysqli_fetch_assoc($result2)) {
?>
 <a href="fphotos.php?name=<?php  echo $row2['name'];?>"><li><?php   echo $row2['name']; ?></li></a>

<?php } ?></ul></div></div>

</body>