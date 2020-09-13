<?php
session_start();
?>
<html>
<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="half">
    <div class="menu">
    </div>
    <center>
        <div class="heading">
            <h1>Land a Job!</h1>
            <h2>You deserve success!</h2>
        </div>
    </center>
</div>
<center>
<div class="about">
    <h4>ABOUT US</h4>
    <h6>This is the website made for the learning purpose, a expansion of the idea of our first semester project.
    This website take the </h6>
    <button class="btn btn-primary" onclick="document.getElementById('suggest-form').style.display='block'">SUGGESTIONS/COMPLAINS</button>
</div>
</center>
    <div class="suggest-form" id="suggest-form">
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text],input[type=email], select, textarea {
                width: 90%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: blue;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .close{
                border: 1px solid black;
                border-radius: 2px;
                float: right;
                cursor: pointer;
            }
            .suggest-form{
                display: none;
                width: 50%;
                height: auto;
                border: 1px solid black;
                padding: 20px;
                background-color: gainsboro;
                position: page;
                margin: auto;
            }
            form div{
                padding: 5px;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 900px) {
                .col-25, .col-75, input[type=submit],.suggest-form {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
        <strong>
            <form action="/action_page.php" method="post">
                <span onclick="document.getElementById('suggest-form').style.display='none'" class="close" title="Close">x</span>
                <h2 style="color: blue">Feel free to suggest!</h2>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="fullname" placeholder="first name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="suggestion">Suggestions/Complaints</label>
                    </div>
                    <div class="col-75">
                        <textarea style="height: 100px" name="suggestion" placeholder="Suggestions/ Complains"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </strong>
    </div>
</center>
<footer class="footer">
    <div class="addr">
        <h1 class="logo">Land a Job</h1>
        <h2>Contact</h2>
        <address>Pokhara, 3370, Nepal<br>
            <a class="btn" href="mailto:landajob@gmail.com">Email Us</a>
        </address>
    </div>
    <ul class="nav">
        <li class="navitem">
            <h2 class="title">Category</h2>
            <ul class="ul">
                <li><a href="#">PHP</a></li>
                <li><a href="#">PYTHON</a></li>
                <li><a href="#">JAVA</a></li>
            </ul>
        </li>

        <li class="navitem">
            <h2 class="title">Legal</h2>
            <ul class="ul">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </li>
        <li class="navitem">
            <h2 class="title">Others</h2>
            <ul class="ul">
                <li><a href="#">Post Job</a></li>
                <li><a href="#">Apply Job</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </li>
    </ul>
</footer>
</body>
</html>

