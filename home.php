<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');
$sql = "SELECT * FROM jobs where phone like '9%'";
$result = mysqli_query($con,$sql);
?>
<html lang="en">
<head>
    <title>Land a Job</title>
    <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="half">
<div class="menu">
    <a><h1 class="logo">Land a Job</h1></a>
    <a href="home.php" class="active"><h1>Home</h1></a>
    <a href="employers.php"><h1>Employers</h1></a>
    <a href="aboutus.php"><h1>About Us</h1></a>
    <div>
        <a class="rgt" href="logout.php"><h1>Log out</h1></a>
         <a href="profile.php"><h1>Welcome <?php echo $_SESSION['username'] ?>!</h1></a>
    </div>
</div>
    <center>
        <div class="heading">
        <h1>Your dream job are a click away!</h1>
        <h2>Find Jobs, Employment and Career Opportunities</h2>
        </div>
        <div class="searchdiv">
            <select id="mySearch" name="keyword" required>
                <option value="PYTHON">PYTHON</option>
                <option value="JAVA">JAVA</option>
                <option value="PYTHON">PHP</option>
                <option value="JAVA">WEB</option>
                <option value="JAVA">AI/MACHINE LEARNING</option>
            </select>
            <select id="mySearch" name="location" required>
                <option value="kathmandu">KATHMANDU</option>
                <option value="lalitpur">LALITPUR</option>
                <option value="bhaktapur">BHAKTAPUR</option>
                <option value="pokhara">POKHARA</option>
                <option value="dharan">DHARAN</option>
            </select>
            <a id="mySearch" class="searchbtn" onclick="">Search</a>
        </div>
    </center>
</div>
<div class="jobs">
    <?php
    if (mysqli_num_rows($result)>0){
    ?>
    <?php
    while($row = mysqli_fetch_array($result)) {
        ?>
    <div class="card">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div style="margin: 10px">
               <?php echo '<a href="jobdetail.php?id='.$row['job_title'].'" class="btn btn-default stretched link"><img src="back.jpg" style="min-width:96px;max-width:96px;min-height:96px;"></a>'    ?></div>
            <div>
                <h4><a href=""><?php echo $row["job_level"] ?> <?php echo $row["job_title"] ?></a></h4>
                <a href=""><h6 style="color: #999999"><?php echo $row["comp_name"] ?></h6></a>
                <div style="width:100% ! important;text-align:left margin: 10px">
                    <ul>
                        <li><?php echo $row["address"] ?></li>
                        <li>Salary:<?php echo $row["salary"] ?></li>
                        <li>Needed Skill:<?php echo $row["skill"] ?></li>
                        <li>Website:<?php echo $row["website"] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php }?>
</div>
<center>
<!--<h1>Welcome --><?php //echo $_SESSION['username']; ?><!--</h1>-->
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
