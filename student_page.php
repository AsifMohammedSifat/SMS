<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="vie wport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style type="text/css">
        #header {
            height: 20%;
            width: 100%;
            background-color: black;
            position: fixed;
            top: 2%;
            text-align: center;
            color: cornsilk;


        }

        #head_text {
            position: fixed;
            top: 2%;
            left: 40%;
            size: 50%;
        }

        #left_side {
            height: 75%;
            width: 30%;
            position: fixed;
            top: 25%;

        }


        #right_side {
            height: 58%;
            width: 74%;
            background-color: aliceblue;
            position: fixed;
            top: 25%;
            left: 17%;
            color: red;
            border: 1px solid black;

        }

        #top_span {
            position: fixed;
            left: 10%;
            top: 15%;
            width: 80%;
            color: whitesmoke;


        }
    </style>
    <?php

    session_start();

    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "sms");

    ?>

</head>

<body>

    <div id="header">
        <p id="head_text"><strong>Student Management System</strong><br>
            &nbsp &nbsp <a href="logout.php">LogOut</a>
        </p>

    </div>
    <span id="top_span">
        <marquee>Note:Welcome Student Please Pay your Dues in Given Date</marquee>
    </span>

    <div id="left_side">

        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_student" value="Search Your Info">
                    </td>
                </tr>




            </table>

        </form>

    </div>
    <div id="right_side"> <br><br>
        <div id="demo">

            <! /**===================================search student start=====================================*/!>


                <?php


                if (isset($_POST['search_student'])) {

                ?>
                    <center>
                        <form action="" method="post">
                            Enter Roll No:
                            <input type="text" name="ID">
                            <input type="submit" name="search_by_roll_no_for_search" value="Search">
                        </form>
                    </center>

                    <?php
                }
                if (isset($_POST['search_by_roll_no_for_search'])) {
                    $query = "select * from student where ID='$_POST[ID]'";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                        <center>
                            <table>
                                <tr>
                                    <td><b> Roll No:</b></td>
                                    <td>
                                        <input type="int" value="<?php echo $row['ID']; ?>" disabled>
                                    </td>
                                </tr>


                                <tr>
                                    <td><b> Name:</b></td>
                                    <td>
                                        <input type="varchar" value="<?php echo $row['Name']; ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td><b> Total Dues:</b></td>
                                    <td>
                                        <input type="varchar" value="<?php echo $row['Total_Dues']; ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td><b> Last Date to Pay:</b></td>
                                    <td>
                                        <input type="varchar" value="<?php echo $row['Last_Date_to_Pay']; ?>" disabled>
                                    </td>
                                </tr>

                            </table>
                        </center>


                <?php


                    }
                }
                ?>

                <!========================search student end=============================*/ /**=========================Edit student start=========================*/!>






        </div>


    </div>

</body>

</html>