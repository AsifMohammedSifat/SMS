<?php

session_start();
header('location:login.php');


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'sms');

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$s="select * from usertable where email='$email'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo "Email Already Taken";

}
else{
    $reg="insert into usertable(email,password,name) value('$email','$pass','$name')";
    mysqli_query($con,$reg);

    echo "Registration Successful";
}




?>