<?php
session_start();
?>
<html lang="en">
<head>
    <title>Post Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="half">
    <div class="menu">
        <a><h1 class="logo">Land a Job</h1></a>
        <a href="postjob.php" class="active"><h1>Home</h1></a>
        <a href="candidates.php"><h1>Candidates</h1></a>
        <a href="aboutus.php"><h1>About Us</h1></a>
        <div>
            <a class="rgt" href="logout.php"><h1>Log out</h1></a>
            <a href="comprofile.php"><h1>Welcome <?php echo $_SESSION['username'] ?>!</h1></a>
        </div>
    </div>
    <center>
        <div class="heading">
            <h1>Land a Job!</h1>
            <h2>Post the vacancy ang get the Best Employee!</h2>
        </div>
    </center>
</div>
<div>
<div class="postform" id="postform">
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],input[type=email],input[type=date], select, textarea {
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
            opacity: 0.6;
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
            cursor:pointer;
        }
        .postform{
            width: 50%;
            height: auto;
            border: 1px solid black;
            padding: 20px;
            background-color: gainsboro;
            position: relative;
            margin:auto;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 900px) {
            .col-25, .col-75, input[type=submit],.postform {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <strong>
        <form action="validate_jobpost.php" method="post">
            <span onclick="document.getElementById('postform').style.display='none'" class="close" title="Close">x</span>
            <h2 style="color: blue">Company Information</h2>
            <div class="row">
                <div class="col-25">
                    <label for="cname">Company Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="cname" name="cname" placeholder="Company Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="cemail">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="cemail" name="cemail" placeholder="comp@example.com" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="website">Website</label>
                </div>
                <div class="col-75">
                    <input type="text" id="website" name="website" placeholder="www.namaskar.np" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="address">Address</label>
                </div>
                <div class="col-75">
                    <input type="text" id="address" name="address">

                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phone" name="phone" placeholder="9846100552">
                </div>
            </div>
            <h1 style="color: blue">Job Vacancy Details</h1>
            <div class="row">
                <div class="col-25">
                    <label>Job Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="job" class="job" name="job" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Job level</label>
                </div>
                <div class="col-75">
                    <select id="level" name="level">
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Salary</label>
                </div>
                <div class="col-75">
                    <input type="text" id="salary" class="salary" name="salary" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="education">Education</label>
                </div>
                <div class="col-75">
                    <select id="education" name="education">
                        <option value="bachelor">Bachelor</option>
                        <option value="master">Master</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="efield">Field</label>
                </div>
                <div class="col-75">
                    <select id="efield" name="efield">
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="IT">IT</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Experience</label>
                </div>
                <div class="col-75">
                    <input type="text" id="exp" class="exp" name="exp" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Deadline</label>
                </div>
                <div class="col-75">
                    <input type="date" id="deadline" class="deadline" name="deadline" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Most Needed Skill</label>
                </div>
                <div class="col-75">
                    <input type="text" id="skill" class="skill" name="skill" required>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Post">
            </div>

        </form>
    </strong>
</div>
</div>
<div>
    <footer class="footer" style="position: relative;">
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
                    <li><a href="#">Log out</a></li>
                </ul>
            </li>
        </ul>
    </footer>
</div>
</body>
</html>


