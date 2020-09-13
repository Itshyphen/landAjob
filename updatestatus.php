<?php
session_start();
$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$id = $_GET['id'];
$user = $_GET['user'];
$res="UPDATE `candidates` SET `status` = '".$id."' WHERE `candidates`.`username` = '".$user."'";

if ($con->query($res) === TRUE) {
    header('location:candidates.php');
} else {
    echo "Error: " . $res . "<br>" . $con->error;
}

?>
