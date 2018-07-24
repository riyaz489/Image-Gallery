<?php include("header.php");?>
<head><link rel="stylesheet" type="text/css" href="css/style2.css">
<script>function sendData(i){
        document.getElementById("im").innerHTML="<center><img style='height:95%;width:auto;' src ='pics/"+i+"' ></center>"
    }</script>
</head>
<body>

<center><div style="width:25%;"><h1 style="border-bottom:2px dashed red;color:grey;"><?php echo $_GET['name']." Album"; ?></h1></div></center>
<div ><center>
 


<?php

$name=$_GET['name'];
require("config.php");
$result=mysqli_query($con,"select  * from photo where name='$name' ;");
while($row=mysqli_fetch_assoc($result)){

    ?>
<div class=" row row2"><div class="box2">
    <div class="albm albm2"><a href="#full" onclick="sendData('<?php echo $row['img_name']; ?>')"><img src="pics/<?php echo $row['img_name']; ?>" alt="add images"> </a></div>
    <div class=" ttl ttl2"><?php echo $row['img_name']; ?></div>
</div></div>
<?php
}
?></center>


<center><div id="full">
<div id ="im">
</div>
<div id="close"><a href="#">X</a></div>
</div></center>

</body>