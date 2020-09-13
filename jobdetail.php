<?php
session_start();
include 'database.php';
$job = $_GET['id'];
$s="SELECT * FROM jobs where job_title='$job'";
$result = mysqli_query($con,$s);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Detail</title>
    <link rel="stylesheet" href="home.css"
    <link href="https://globaljob.com.np/content_home/css/bootstrap.min.css" rel="stylesheet">
    <style>
        td{
            padding: 5px;
            margin: 5px;
            border: 1px solid black;
        }
        table{
            border: 3px solid black;
        }
        .container{
            margin-left,margin-right: 20%;
            margin-bottom: 20px;
            font-size: 18px;
            background: white;
        }
        hr{
            border: 2px solid black;
        }
        .appform{
            display: none;
        }
    </style>
</head>
<body>
<div class="half">
    <div class="menu">
        <a><h1 class="logo">Land a Job</h1></a>
        <a href="home.php"><h1>Home</h1></a>
        <a href="employers.php"><h1>Employers</h1></a>
        <a href="aboutus.php"><h1>About Us</h1></a>
        <div>
            <a class="rgt" href="logout.php"><h1>Log out</h1></a>
            <a href="profile.php"><h1>Welcome <?php echo $_SESSION['username'] ?>!</h1></a>
        </div>
    </div>
    <?php
    while($row = mysqli_fetch_array($result)) {
    ?>
    <center>
        <div class="heading">
            <h1><?php echo $row['comp_name'] ?></h1>
        </div>
    </center>
</div>
<div class="container">
    <div>
        <h1><?php echo $row['job_title'] ?></h1>
    </div>
    <div>
        <p><b><?php echo $row['comp_name'] ?></b> is seeking expressions of interest from highly qualified candidates for the <b><?php echo $row['job_level'] ?> <?php echo $row['job_title'] ?></b>. Nepali nationals are strongly encouraged to apply.</p>
    </div>
    <div class="j-overview">
        <h2>Job overview:</h2>
        <div class="row">
            <table>
                <tr>
                    <td>Job Title</td>
                    <td><?php echo $row['job_title'] ?></td>
                </tr>
                <tr>
                    <td>Job level</td>
                    <td><?php echo $row['job_level'] ?></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><?php echo $row['salary'] ?></td>
                </tr>
                <tr>
                    <td>No. of vacancy/s</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><?php echo $row['experience'] ?></td>
                </tr>
                <tr>
                    <td>Job location</td>
                    <td><?php echo $row['address'] ?></td>
                </tr>
                <tr>
                    <td>Apply Before</td>
                    <td><?php echo $row['deadline'] ?></td>
                </tr>

            </table>
        </div>
        <hr>
        <div>
            <h2>Educational Descriptions:</h2>
            <ul>
                <li><strong>Required Education : </strong><?php echo $row['education'] ?></li>
                <li><strong>Expected Faculty : </strong><?php echo $row['efield'] ?> </li>
            </ul>
        </div>
        <hr>
        <div>
            <h2>Job Specification:</h2>
            <ul>
                <li>Must have a Bachelor/ Master's Degree in Computer Engineering</li>
                <li>Experience as mentioned above</li>
            </ul>
        </div>
        <hr>
        <div>
            <h2>Specific Requirement :</h2>
            <ul>
                <li><?php echo $row['job_title'] ?> will be responsible for coordinating with various clients and consultants,</li>
                <li><?php echo $row['job_title'] ?> will be responsible for completing the jobs on time,</li>
                <li><?php echo $row['job_title'] ?> should be proficient in related jobs.</li>
            </ul>
        </div>
        <hr>
        <div>
            <h2>How to apply for this post ?</h2>
            <p>Suitable candidates meeting the criteria for the above-mentioned positions are requested to apply with an updated CV and cover letter at <strong><?php echo $row['email'] ?></strong> or you can apply directly from <strong><i>Land a Job</i>.</strong></p>
        </div>
        <button type="button" class="btn btn-defult" style="background: blue;color: white" onclick="document.getElementById('appform').style.display='block'">Apply Now</button>
        <div style="margin-top: 20px;background: maroon;color: white">
            <strong>The deadline to apply for the above position is <?php echo $row['deadline'] ?>!</strong>
        </div>
    </div>
</div>

<div class="appform" id="appform">
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],input[type=email],input[type=url], select, textarea {
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
        }
        .appform{
            width: 800px;
            height: auto;
            border: 1px solid black;
            padding: 10px;
            background-color: gainsboro;
            position: page;
            margin: auto;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <strong>
    <form action="applydb.php" method="post">
        <input type="text" name="cname" value="<?php echo $row['comp_name'] ?>">
        <input type="text" name="job" value="<?php echo $job ?>">
        <?php }?>
        <span onclick="document.getElementById('appform').style.display='none'" class="close" title="Close">x</span>
        <center><h2>Apply!</h2><p>Fill the form below to apply for the job.</p></center>
        <h2 style="color: blue">Personal Information</h2>
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="fname" placeholder="Full name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="user@example.com">
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
                <label for="resume">Resume URL</label>
            </div>
            <div class="col-75">
                <input type="url" id="url" name="resume" placeholder="Resume url">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Country</label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                    <option value="Nepal">Nepal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="phone">Phone Number</label>
            </div>
            <div class="col-75">
                <input type="text" id="phone" name="Phone" placeholder="9846100552">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="hobby">Your Hobbies</label>
            </div>
            <div class="col-75">
                <textarea id="hobby" name="hobby" placeholder="Your hobbies..." style="height:100px"></textarea>
            </div>
        </div>
        <h1 style="color: blue">Previous/Current Job Details</h1>
        <div class="row">
            <div class="col-25">
                <label>Compant Name</label>
            </div>
            <div class="col-75">
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Job Title</label>
            </div>
            <div class="col-75">
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>How long were you there?</label>
            </div>
            <div class="col-75">
                <input type="text">
            </div>
        </div>
        <div>
            <strong>We will look over your application and get to you!</strong>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
    </strong>
</div>
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


