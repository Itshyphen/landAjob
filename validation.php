<?php
session_start();

$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$name=$_POST['user'];
$pass=$_POST['psw'];

$s="select * from usertable where name='$name' && password='$pass' && status='job_seeker'";
$s1="select * from usertable where name='$name' && password='$pass' && status='employer'";

$result=mysqli_query($con,$s);
$result1=mysqli_query($con,$s1);

$num=mysqli_num_rows($result);
$num1=mysqli_num_rows($result1);
$_SESSION['username']=$name;
echo $_SESSION['username'];

if($num==1){
    header('location:home.php');
}elseif ($num1==1){
    header('location:postjob.php');
}
else{
   header('location:index.php');
   echo "Username or password is incorrect";
}
?>

