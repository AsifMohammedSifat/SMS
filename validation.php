<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'sms');







if (isset($_POST['submit'])) {


    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name=$_POST['name'];


    $s = "select * from usertable where email='$email' && password='$pass'";

    $result = mysqli_query($con, $s);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        header('location:admin_dashboard.php');
        exit();
    } else {
        header('location:login.php');
        exit();
    }
}
?>
