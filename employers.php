<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');
$sql = "SELECT * FROM company_profile where phone like '9%'";
$result = mysqli_query($con,$sql);
?>
<html>
<head>
    <title>Employers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="half">
    <div class="menu">
        <a><h1 class="logo">Land a Job</h1></a>
        <a href="home.php"><h1>Home</h1></a>
        <a href="employers.php" class="active"><h1>Employers</h1></a>
        <a href="aboutus.php"><h1>About Us</h1></a>
        <div>
            <a class="rgt" href="logout.php"><h1>Log out</h1></a>
            <a href="profile.php"><h1>Welcome <?php echo $_SESSION['username'] ?>!</h1></a>
        </div>
    </div>
    <center>
        <div class="heading">
            <h1>Hello <?php echo $_SESSION['username'] ?>!</h1>
            <h2>Meet your Employers here!</h2>
        </div>
    </center>
</div>
    <!--<h1>Welcome --><?php //echo $_SESSION['username']; ?><!--</h1>-->
<?php
if (mysqli_num_rows($result)>0){
?>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<div class="ecard">
    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
        <div style="margin: 10px">
            <a href="" class="stretched link"><img src="back.jpg" style="min-width:96px;max-width:96px;min-height:96px;"></a>
        </div>
        <div>
            <?php echo '<h4><a href="employer_details.php?id='.$row['username'].'">'?><?php echo $row['comp_name']?></a></h4>
            <a href=""><h6 style="color: #999999"><?php echo $row['address']?></h6></a>
            <div style="width:100% ! important;text-align:left margin: 10px">
                <ul >
                    <li style="display: inline-block;padding-right: 100px"><b><?php echo $row['fields']?></b></li>
                    <li style="display: inline-block;padding-right: 100px"><b>website:<?php echo $row['branch']?></b></li>
                    <li style="display: inline-block;padding-right: 100px"><b>email:<?php echo $row['email']?></b></li>
                    <li style="display: inline-block;padding-right: 100px"><b>Phone<?php echo $row['phone']?></b></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php }?>
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

