<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$username = $_SESSION['username'];
$fullname = $_POST['fname'];
$bio=$_POST['bio'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$softskills = $_POST['softskills'];
$p_lang = $_POST['p_lang'];
$tools = $_POST['tools'];


$sql = "INSERT INTO emp_profile(username,fullname,bio,address,email,p_lang,tools,phone,softskills,education,experience)
           VALUES ('$username','$fullname','$bio','$address','$email','$p_lang','$tools','$phone','$softskills','$education','$experience')";
if ($con->query($sql) === TRUE) {
    header('location:home.php');
}
?>
