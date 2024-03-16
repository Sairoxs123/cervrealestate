<?php
    session_start();
?>
<html>
    <head>
    <link href="sign.css" rel="stylesheet" type="text/css">
        <title>
            Sign Up
        </title>
        <link href="background2.png" rel="icon">
    </head>
    <body bgcolor="red">
    <div class="main">
    <div class="register">
        <h2>Register Here</h2>
        <section>
        <form action="signup.inc.php" id="register" method="post">
            <label>First Name : </label>
            <br>
            <input type="text" name="name" id="name" placeholder="Enter Your First Name">
            <br><br>
            <label>Email : </label>
            <br>
            <input type="email" name="email" id="name" placeholder="Enter Your Email">
            <br><BR>
            <label>Username : </label>
            <br>
            <input type="text" name="uid" id="name" placeholder="Enter Your Username">
            <br><br>
            <label>Password : </label>
            <br>
            <input type="password" id="name" name="pwd" placeholder="Enter Your Password">
            <br><BR>
            <label>Re-enter your password : </label>
            <br>
            <input type="password" id="name" name="pwdrepeat" placeholder="Re-enter Your Password">
            <br><br>
            <label>Gender : </label>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="male">
            &nbsp;
            <span id="male">Male</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="female" name="gender">
            &nbsp;
            <span id="female">Female</span>
            <br><br>
            <button type="submit" id="submit" name="submit">Sign Up</button>
        </form>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p style='text-align:center;'>Fill in all the fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid"){
                echo "<p style='text-align:center;'>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail"){
                echo "<p style='text-align:center;'>Choose a proper email!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p style='text-align:center;'>Passwords doesn't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
            echo "<p style='text-align:center;'>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken"){
            echo "<p style='text-align:center;'>Username is already taken!</p>";
            }
            else if ($_GET["error"] == "none"){
            echo "<p style='text-align:center;'>You have signed up!</p>";
            }   
        }
    ?>
    </section>
    </div>
    </div>
    </body>
</html>