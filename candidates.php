<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');
$comp_name="SELECT * FROM company_profile where username='".$_SESSION['username']."'";
$cname = mysqli_query($con,$comp_name);
$name=mysqli_fetch_array($cname);
$applied = "SELECT * FROM candidates where comp_name='".$name['comp_name']."' && status='applied'";
$shortlist = "SELECT * FROM candidates where comp_name='".$name['comp_name']."' && status='shortlisted'";
$interview = "SELECT * FROM candidates where comp_name='".$name['comp_name']."' && status='interview'";
$result = mysqli_query($con,$applied);
$result2 = mysqli_query($con,$shortlist);
$result3 = mysqli_query($con,$interview);
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
        <a href="candidates.php" class="active"><h1>Candidates</h1></a>
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
<div>
    <h2>All Applied Candidates</h2>
    <?php while ($row=mysqli_fetch_array($result)){?>
    <div class="ecard">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div style="margin: 10px">
                <a href="" class="stretched link"><img src="back.jpg" style="min-width:96px;max-width:96px;min-height:96px;"></a>
            </div>
            <div>
                <?php echo '<h4><a href="candidate_details.php?id='.$row['username'].'">'?><?php echo $row['candidate_name']?></a></h4>
                <a href=""><h6 style="color: #999999"><?php echo $row['job_title']?></h6></a>
                <div style="width:100% ! important;text-align:left margin: 10px">
                    <?php
                    $con = mysqli_connect('localhost','root','12345678');
                    mysqli_select_db($con,'register');
                    $sql = "SELECT * FROM `emp_profile` WHERE username = '".$row['username']."'";
                    $rs = mysqli_query($con,$sql);
                    $emp=mysqli_fetch_array($rs);
                    ?>
                    <ul >
                        <li ><b>Programming Languages: <?php echo $emp['p_lang']?></b></li>
                        <li ><b>Tools or Framework Used: <?php echo $emp['tools']?></b></li>
                        <li><b>Resume:<a href="<?php $emp['resume']?>"><?php echo $emp['resume']?></a></b></li>
                            <li style="display: inline-block"><?php $id="shortlisted"; echo '<a href="updatestatus.php?user='.$row['username'].'&& id='.$id.'" class="btn btn-primary stretched link">Shortlist</a>'?></li>
                            <li style="display: inline-block"><?php $id="interview"; echo '<a href="updatestatus.php?user='.$row['username'].'&& id='.$id.'" class="btn btn-primary stretched link">Call for Interview</a>'?></li>
                        <li style="display: inline-block"><?php $id="reject"; echo '<a href="updatestatus.php?user='.$row['username'].'&& id='.$id.'" class="btn btn-primary stretched link">Reject</a>'?></li>
<!--                            <li style="display: inline-block"><a href="updatestatus.php?id='shortlist'" name="interview" class="btn btn-primary" value="Call for Interview" style="position:relative;float: right"></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <hr>
    <h2>Shortlisted Candidates</h2>
    <?php while ($row=mysqli_fetch_array($result2)){?>
        <div class="ecard">
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                <div style="margin: 10px">
                    <a href="" class="stretched link"><img src="back.jpg" style="min-width:96px;max-width:96px;min-height:96px;"></a>
                </div>
                <div>
                    <h4><a href=""><?php echo $row['candidate_name']?></a></h4>
                    <a href=""><h6 style="color: #999999"><?php echo $row['job_title']?></h6></a>
                    <div style="width:100% ! important;text-align:left margin: 10px">
                        <?php
                        $con = mysqli_connect('localhost','root','12345678');
                        mysqli_select_db($con,'register');
                        $sql = "SELECT * FROM `emp_profile` WHERE username = '".$row['username']."'";
                        $rs = mysqli_query($con,$sql);
                        $emp=mysqli_fetch_array($rs);
                        ?>
                        <ul >
                            <li ><b>Programming Languages: <?php echo $emp['p_lang']?></b></li>
                            <li ><b>Tools or Framework Used: <?php echo $emp['tools']?></b></li>
                            <li><b>Resume:<a href="<?php $emp['resume']?>"><?php echo $emp['resume']?></a></b></li>
                            <li style="display: inline-block"><?php $id="interview"; echo '<a href="updatestatus.php?user='.$row['username'].'&& id='.$id.'" class="btn btn-primary stretched link">Call for Interview</a>'?></li>
                            <li style="display: inline-block"><?php $id="reject"; echo '<a href="updatestatus.php?user='.$row['username'].'&& id='.$id.'" class="btn btn-primary stretched link">Reject</a>'?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <hr>
    <h2>Candidates called for Interview</h2>
    <?php while ($row=mysqli_fetch_array($result3)){?>
        <div class="ecard">
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                <div style="margin: 10px">
                    <a href="" class="stretched link"><img src="back.jpg" style="min-width:96px;max-width:96px;min-height:96px;"></a>
                </div>
                <div>
                    <h4><a href=""><?php echo $row['candidate_name']?></a></h4>
                    <a href=""><h6 style="color: #999999"><?php echo $row['job_title']?></h6></a>
                    <div style="width:100% ! important;text-align:left margin: 10px">
                        <?php
                        $sql = "SELECT * FROM `emp_profile` WHERE username = '".$row['username']."'";
                        $rs = mysqli_query($con,$sql);
                        $emp=mysqli_fetch_array($rs);
                        ?>
                        <ul >
                            <li ><b>Programming Languages: <?php echo $emp['p_lang']?></b></li>
                            <li ><b>Tools or Framework Used: <?php echo $emp['tools']?></b></li>
                            <li><b>Resume:<a href="<?php $emp['resume']?>"><?php echo $emp['resume']?></a></b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

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