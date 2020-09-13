<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$username=$_SESSION['username'];
$candidate_name=$_POST['fname'];
$comp_name=$_POST['cname'];
$resume=$_POST['resume'];
$job_title=$_POST['job'];

$sql ="INSERT INTO candidates(comp_name,candidate_name,job_title,username,status)
           VALUES ('$comp_name','$candidate_name','$job_title','$username','applied')";
$res="UPDATE `emp_profile` SET `resume` = '".$resume."' WHERE `emp_profile`.`username` = '".$username."'";

mysqli_query($con,$res);
if ($con->query($sql) === TRUE) {
    header('location:jobdetail.php');
}
?>