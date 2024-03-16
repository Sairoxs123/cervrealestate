<?php
    session_start();
?>
<html>
    <head>
    <link href="sign.css" rel="stylesheet" type="text/css">
        <title>
            Login
        </title>
        <link href="background2.png" rel="icon">
    </head>
    <body>
    <div class="main">
    <div class="register">
        <h2>Login Here</h2>
        <section>
        <form action="login.inc.php" id="register" method="post">
        <label>Username/Email : </label>
            <br>
            <input type="text" name="uid" id="name" placeholder="Enter Your Username/Email">
            <br><br>
            <label>Password : </label>
            <br>
            <input type="password" id="name" name="pwd" placeholder="Enter Your Password">
            <br><br>
            <button type="submit" id="submit" name="submit" style="margin-left:19%;">Login</button>
        </form>
        <a href="sign.php">
            <button type="submit" id="submit" style="margin-left:25%;">Sign Up</button>
        </a>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo '<p style="text-align:center;">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "wronglogin"){
                echo '<p style="text-align:center;">Incorrect login information!</p>';
            }
        }
    ?>
    </section>
    </div>
    </div>
    </body>
</html>