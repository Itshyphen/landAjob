<?php
session_start();
include 'database.php';
//$profile = $_GET['id'];
$s="SELECT * FROM emp_profile where username='".$_SESSION['username']."'";
$result = mysqli_query($con,$s);
$emp=mysqli_fetch_array($result);
?>

<html>
<head>
    <title>Job Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .profile{
            width: 800px;
            border: 2px solid blue;
            margin: auto;
        }
        .profile div{
            padding: 10px;
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
            <a href="profile.php"><h1>Welcome <?php echo $_SESSION['username']; ?>!</h1></a>
        </div>
    </div>
    <center>
        <div class="heading">
            <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
            <h2>This is the profile seen to the Employer, So make it attractive!</h2>
        </div>
        <?php
        $applied = "SELECT * FROM candidates where username='".$_SESSION['username']."' && status='interview'";
        $message=mysqli_query($con,$applied);
        while ($msg=mysqli_fetch_array($message)){?>
            <center>
                <div class="message" style="color: white;border: 2px solid white">
                    <h4>Congratulations! You are called for Interview for your applied job post <?php echo $msg['job_title'] ?> by the <?php echo $msg['comp_name'] ?>!</h4>
                    <h4>All the best for your Interview!</h4>
                </div>
            </center>
        <?php } ?>
    </center>
</div>
<div class="profile" style="padding: 20px;border-top: 0px" >

    <div class="adr">
        <small>
            <b>
                <a class="edit" href="#" style="float: right">Edit</a>
            <h6 style="color: #999999"><?php echo $emp['address'] ?></h6>
            <h6 style="color: blue"><?php echo $emp['phone'] ?></h6>
            <h6 style="color: blue"><?php echo $emp['email'] ?></h6>
            </b>
        </small>
    </div>
    <div class="name">
        <h1><?php echo $emp['fullname'] ?></h1>
    </div>
    <hr style="border: 2px solid black">
    <div class="bio">
        <h4 style="color: #333333">PROFILE</h4>
        <p><?php echo $emp['bio'] ?>
        </p>
    </div>
    <div class="skills">
        <h4 style="color: #333333">SKILLS</h4>
        <h6><strong>Soft Skills: </strong><span><?php echo $emp['softskills'] ?></span></h6>
        <h6><strong>Programming Languages: </strong><span><?php echo $emp['p_lang'] ?></span></h6>
        <h6><strong>Tools/Framework: </strong><span><?php echo $emp['tools'] ?></span></h6>
    </div>
    <div class="education">
        <h4 style="color: #333333">EDUCATION</h4>
        <p><?php echo $emp['education'] ?></p>
    </div>
    <div class="experience">
        <h4 style="color: #333333">EXPERIENCES</h4>
        <p><?php echo $emp['experience'] ?></p>
    </div>
    <div class="contact">
        <h4 style="color: #333333">CONTACTS</h4>
        <h6>Email: <span><?php echo $emp['email'] ?></span></h6>
        <h6>Phone: <span><?php echo $emp['phone'] ?></span></h6>
    </div>


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


