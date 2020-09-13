<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Land a Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="register.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header">
    <button class="reg" onclick="document.getElementById('reg-form').style.display='block',document.getElementById('login-form').style.display='none'" style="width:auto;">Register</button>
    <button class="signin" onclick="document.getElementById('reg-form').style.display='none',document.getElementById('login-form').style.display='block'" name="login">Login</button>
</div>
<div class="title">
    <center>
    <h1>Land a Job</h1>
    <h2 style="color: aliceblue">Its the way to your dream job!</h2>
    </center>
</div>
<div id="reg-form" class="show">
    <form class="modal-content" action="registration.php" method="post">
        <center>
            <div class="container">
                <span onclick="document.getElementById('reg-form').style.display='none'" class="close" title="Close">x</span>
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label><b>Username</b></label>
                <input type="text" placeholder="Username" name="user" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <hr>
                <label for="status"><b>Position</b></label>
                <select id="status" name="status" required>
                    <option value="job_seeker">Job Seeker</option>
                    <option value="employer">Employer</option>
                </select>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" class="registerbtn">Register</button>
                <p>Already have an account? <button class="abc" onclick="document.getElementById('reg-form').style.display='none',document.getElementById('login-form').style.display='block'"">Login</a>.</p>
            </div>
        </center>
    </form>
</div>
<div id="login-form" class="show">
    <form class="modal-content" action="validation.php" method="post">
        <center>
            <div class="container">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close" title="Close">x</span>
                <h1>Login</h1>
                <hr>
                <label><b>Username</b></label>
                <input type="text" placeholder="Username" name="user" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <hr>
                <button type="submit" class="signinbtn">Log in</button>
                <p>Don't have an account? <button class="abc" onclick="document.getElementById('login-form').style.display='none',document.getElementById('reg-form').style.display='block'"">Register</button>.</p>
            </div>
        </center>
    </form>
</div>
</body>

</html>
