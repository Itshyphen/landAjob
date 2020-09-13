<?php
session_start();
include 'database.php';
$username = $_GET['id'];
$s="SELECT * FROM emp_profile where username='".$username."'";
$result = mysqli_query($con,$s);
$emp=mysqli_fetch_array($result);
?>
<html>
<head>
    <title>Candidates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="half">
    <div class="menu">
        <a><h1 class="logo">Land a Job</h1></a>
        <a href="postjob.php"><h1>Home</h1></a>
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
            <h2>Enquire the candidates applied for your job, shortlist them, and you can call for the interview!</h2>
        </div>
    </center>
</div>
<div class="profile" style="padding: 20px;border-top: 0px" >

    <div class="adr">
        <small>
            <b>
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
                <li><a href="#">Log out</a></li>
            </ul>
        </li>
    </ul>
</footer>
</body>
</html>
