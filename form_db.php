<?php
session_start();
    $con = mysqli_connect('localhost','root','12345678');
    mysqli_select_db($con,'register');

    $username = $_SESSION['username'];
    $comp_name = $_POST['cname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $field = $_POST['field'];
    $branch = $_POST['branch'];
    $emp_voice = $_POST['emp_voice'];
    $comp_bio = $_POST['comp_bio'];

    $sql = "INSERT INTO company_profile(username,comp_name,address,phone,email,fields,branch,emp_voice,comp_bio)
           VALUES ('$username','$comp_name','$address','$phone','$email','$field','$branch','$emp_voice','$comp_bio')";
if ($con->query($sql) === TRUE) {
    header('location:postjob.php');
}
?>
