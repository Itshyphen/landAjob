<?php
session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','12345678');
mysqli_select_db($con,'register');

$email=$_POST['email'];
$name=$_POST['user'];
$pass=$_POST['psw'];
$status=$_POST['status'];

$s="select * from usertable where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
$_SESSION['username']=$name;
if($num==1){
    echo "Username already Taken!";
}
else{
    $reg ="insert into usertable(email, name, password, status) values ('$email','$name','$pass','$status')";
    mysqli_query($con,$reg);
    echo '<div style="text-align: center;border: 2px solid blue;background: blue;color:white"><h1> Registration Successful</h1></div>';
    if($status='job_seeker'){
        header('location:profileform.php');
    }else
    { header('location:compform.php');}
}
?>
