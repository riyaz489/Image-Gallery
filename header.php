<style>
#header{
    background-color:rgba(2,2,2,0.9);
    width:100%;
    height:10%;
    margin-top:0%;
}
a{
    text-decoration:none;
}
#hed{margin-left:4%;
margin-top:-1%;
color: rgb(152, 203, 226);
}
#ses{
    margin-left:80%;
    position:absolute;
    margin-top:-8vh;
    color:white;
    font-size:1.2em;
}

</style>
<body>    
<div id="header"><br><a  href="album.php"><h2 id="hed">Album</h2></a> 
<a id="ses" href="logout.php">&empty;
<?php
session_start();
echo($_SESSION['name']);
?></a></div><body>