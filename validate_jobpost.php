<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$username=$_SESSION['username'];
$comp_name=$_POST['cname'];
$email=$_POST['cemail'];
$website=$_POST['website'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$job_title=$_POST['job'];
$job_level=$_POST['level'];
$salary=$_POST['salary'];
$education=$_POST['education'];
$efield=$_POST['efield'];
$experience=$_POST['exp'];
$deadline=$_POST['deadline'];
$skill=$_POST['skill'];

$s="select * from jobs where 
username='$username'
comp_name='$comp_name'
email='$email'
website='$website'
phone='$phone'
address='$address'
job_title='$job_title'
job_level='$job_level'
efield='$efield'
salary='$salary'
education='$education'
experience='$experience'
deadline='$deadline'
skill='$skill'";

    $sql ="INSERT INTO jobs(username,comp_name,email,website,phone,address,job_title,job_level,salary,education,efield,experience,deadline,skill)
           VALUES ('$username','$comp_name','$email','$website','$phone','$address','$job_title','$job_level','$salary','$education','$efield','$experience','$deadline','$skill')";
if ($con->query($sql) === TRUE) {
    header('location:postjob.php');
}

?>
