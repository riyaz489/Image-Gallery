<?php include("header.php");?>
<head>
    

<link rel="stylesheet" type="text/css" href="css/style2.css">
<script>function f1(){
        if(document.f.n.value==""){
            document.getElementById("msg").innerHTML="plese upload the picture";
            }
            else{
                document.f.submit();}
    }

    function sendData(i){
        document.getElementById("im").innerHTML="<center><img style='height:95%;width:auto;' src ='pics/"+i+"' ></center>"
    }
</script></head>
<body>

<center><div style="width:25%;"><h1 style="border-bottom:2px dashed red;color:grey;"><?php echo $_GET['album']."_".$_GET['year']; ?></h1></div></center>
<div ><center>
 
<form name="f" action="photos2.php" method="post" enctype="multipart/form-data">
<input type="file" id="n" style=" margin-left:22%;border-radius:1.2em;font-size:1.2em;background-color:rgba(20,20,240,0.6);" name="s" >
<input type="hidden" name="album" value="<?php echo $_GET['album'];?>">
<input type="hidden" name="year" value="<?php echo $_GET['year'];?>">
<input type="hidden" name="name" value="<?php echo $_SESSION['name'];?>">
<input type="button" onclick="f1()" style="display:inline-block;border:none;pading:5px;width:7vw;height:3vw; margin-left:22%;border-radius:1.2em;font-size:1.2em;background-color:rgba(240,20,20,0.8); color:white;" value="upload">
<br><label style="color:red;" id="msg"></label><br>
</form>



<?php
$album=$_GET['album'];
$year=$_GET['year'];
require("config.php");
$result=mysqli_query($con,"select  * from photo where albumname='$album'  and year='$year' ;");
while($row=mysqli_fetch_assoc($result)){

    ?>
<div class=" row row2"><div class="box2">
    <div class="albm albm2"><a href="#full" onclick="sendData('<?php echo $row['img_name']; ?>')"><img  src="pics/<?php echo $row['img_name']; ?>" alt="add images"></a> </div>
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