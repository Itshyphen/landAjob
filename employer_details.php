<?php
session_start();

include 'database.php';
$username = $_GET['id'];
$s="SELECT * FROM company_profile where username='".$username."'";
//$sv="DELETE FROM company_profile WHERE address=''";
$result = mysqli_query($con,$s);
$comp=mysqli_fetch_array($result);
?>

<html lang="en">
<head>
    <title>JEmployers</title>
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
            <a href="profile.php"><h1>Welcome <?php echo $_SESSION['username'] ?>!</h1></a>
        </div>
    </div>
</div>
<div class="profile" style="padding: 20px">

    <div adr>
        <small>
            <b>
                <h6 style="color: #999999"><?php echo $comp['address'] ?></h6>
                <h6 style="color: blue"><?php echo $comp['email'] ?></h6>
                <h6 style="color: blue"><?php echo $comp['branch'] ?></h6>
            </b>
        </small>
    </div>
    <div class="name">
        <h1><?php echo $comp['comp_name'] ?></h1>
    </div>
    <hr style="border: 2px solid black">
    <div class="bio">
        <h4 style="color: #333333">Company Description</h4>
        <p><?php echo $comp['comp_bio'] ?>
        </p>
    </div>
    <div class="skills">
        <h4 style="color: #333333">FIELDS</h4>
        <h6><strong><?php echo $comp['fields'] ?></h6>
    </div>

    <div class="experience">
        <h4 style="color: #333333">FROM THE EMPLOYER OF COMPANY</h4>
        <p><?php echo $comp['emp_voice'] ?></p>
    </div>
    <div class="contact">
        <h4 style="color: #333333">CONTACTS</h4>
        <h6>Email: <span><?php echo $comp['email'] ?></span></h6>
        <h6>Phone: <span><?php echo $comp['phone'] ?></span></h6>
        <h6>Website: <span><a href="<?php echo $comp['branch'] ?>"><?php echo $comp['branch'] ?></a></span></h6>
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
