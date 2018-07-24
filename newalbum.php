<?php include("header.php");?>
<head><link rel="stylesheet" type="text/css" href="css/style2.css">
<script>

    function f1(){
        if(document.f.n.value==""){
            document.getElementById("msg").innerHTML="plese enter the title";
            }
            else{
                document.f.submit();}
    }
</script>

</head>
<body>

<center><div style="width:25%;"><h1 style="border-bottom:2px dashed red;color:grey;">Create new Album</h1></div></center>
<center><br><br><br>
<form action="newalbum2.php" method="post" name="f" >
    <pre><label for="n"> Enter Album Name: </label>     <input  type="text" style="border-top:none;border-bottom:2px solid green;border-left:none;border-right:none;" placeholder="please enter title" name="n" id="n">
</pre><br>
<label style="color:red;" id="msg"><?php if(isset($_GET['ms'])) echo $_GET['ms'];
else echo ""; ?></label>
<br><br><br>
<input type="button" Value="Create" style="background-color:red;border:none; border-radius:1.2em;color:white;
width:8vw;height:2.3vw;font-size:1.2em;" onclick="f1()">
</form></center>

</body>