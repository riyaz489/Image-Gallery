<html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
        function func2() {
            var a = document.f2.n1.value;
            var b = document.f2.p1.value;
            var c = document.f2.h1.value;
            var el1 = document.getElementById("l2-1");
            var el2 = document.getElementById("l2-2");
            var el3 = document.getElementById("l2-3");
            if (c == "") {
                el3.innerHTML = "please enter your name";
                el2.innerHTML = "";
                el1.innerHTML = "";

                document.f2.h1.focus();
                return false;

            } else if (a == "") {
                el1.innerHTML = "please enter your id";
                el2.innerHTML = "";
                el3.innerHTML = "";

                document.f2.n1.focus();
                return flase;

            } else if (b == "") {
                el2.innerHTML = "please enter your password";
                el1.innerHTML = "";
                el3.innerHTML = "";

                document.f2.p1.focus();
                return false;
            } else {

                return true;

            }
        }

        function func3() {
            var b = document.f2.p1.value;
            var el1 = document.getElementById("l2-1");
            var el2 = document.getElementById("l2-2");
            var el3 = document.getElementById("l2-3");


            if (b.length < 6 || b.length > 15) {
                el2.innerHTML = "password should be less than 15 and greater than 5";
                el1.innerHTML = "";
                el3.innerHTML = "";

                document.f2.p1.focus();
                

            } else
            if (!(/[a-z]/g.test(b) && /[A-Z]/g.test(b) && /[0-9]/g.test(b) && /[!@#\$%\^&\*]/g.test(b))) {
                el2.innerHTML = "password should containt atleast one upper,one lowercase ,one numeric and one special character";
                el1.innerHTML = "";
                el3.innerHTML = "";
                document.f2.p1.focus();
                


            } else {el2.innerHTML = "";
            }
        }
    </script>


</head>

<body>
    <div class="container">
        <form action="signup2.php" class="form2" name="f2" method="post" onsubmit="return func2()">
            <h2><u>New User?</u></h2><br>
            <label class="lbl" for="ha">Enter your name:</label>
            <input type="text" style="margin-left:3%;" id="ha" name="h1" placeholder="enter your name ">
            <br><label class="f2-id-msg" id="l2-3"></label>

            <br><br>

            <label class="lbl" for="id2">Enter Id:</label>
            <input style="margin-left:19%;margin-bottom:-10%; " type="text" id="id2" name="n1" placeholder="enter your id">
            <br><label class="f2-id-msg" id="l2-1"> <?php if(isset($_GET['msg2']))echo($_GET['msg2']);
            else echo ("");?>  </label>
            <br><br>
            <label class="lbl" for="pwd2">Enter password:</label>
            <input type="password" style="margin-left:7.5%;" id="pwd2" name="p1" onblur="func3()" placeholder="enter your password">
            <br><label class="f2-id-msg" id="l2-2"></label>


            <br>
            <br><br><br>
            <br><input type="submit" name="btn" style="margin-top: -10%;background: linear-gradient(to right,rgba(18, 72, 143, 0.575),rgba(92, 231, 11, 0.685));" value="SignUp " onclick="func2() ">
            <input type="reset"> <a href=index.php> Want to Log in?</a>



            <br> <label class="f2-id-msg" style="color:green; "><div style="  margin-top:-10px;margin-left:50%;"> <?php if(isset($_GET['msg3']))echo($_GET['msg3']);
            else echo ("");?></div></label>
        </form>
    </div>
</body>

</html>