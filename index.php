<html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
        function func1() {


            var a = document.f1.n1.value;
            var b = document.f1.p1.value;
            var el1 = document.getElementById("l1");
            var el2 = document.getElementById("l2");
            if (a == "") {
                el1.innerHTML = "please enter your id";
                el2.innerHTML = "";
                document.f1.n1.focus();
                return false;
            } else if (b == "") {
                el2.innerHTML = "please enter your password";
                el1.innerHTML = "";
                document.f1.p1.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>


</head>

<body>
    <div class="container">
        <form action="login2.php" name="f1" method="post" onsubmit="return func1()">
            <pre>  <label class="lbl" for="id">Enter Id:</label>          <input type="text" id="id" name="n1" placeholder="enter your id"></pre>
            <br> <label class="id-msg" id="l1"><?php if(isset($_GET['msg1']))echo($_GET['msg1']);
                else echo ("");?> </label>
            <br><br><pre> <label class="lbl" for="pwd">Enter password:</label>     <input type="password" id="pwd" name="p1" placeholder="enter your password"></pre>
            <br> <label class="id-msg" id="l2"></label>

            <br><br>
            <input type="submit" value="Login">
            <br><br><a href="signup.php">Sign up?</a>
        </form>
    </div>
</body>

</html>