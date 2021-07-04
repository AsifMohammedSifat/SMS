<!DOCTYPE html>
<html>

<head>
    <title>Student Management System </title>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/jpg" href="OP.jpg" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="OIP.png" />

</head>


<body>
    <center>
        <h3>Student Management System </h3><br>
        <form action="" method="post">
            <input type="submit" name="admin_login" value="Admin Login">
            <input type="submit" name="student_login" value="student Login">
        </form>
        <?php
        if (isset($_POST['admin_login'])) {
            header('location:registration.php');
        }

        if (isset($_POST['student_login'])) {
            header('location:student_page.php');
        }


        ?>
    </center>

</body>

</html>