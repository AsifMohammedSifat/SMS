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
        <marquee>Note:Welcome Sir/Mem.Now you can Edit student Dues Collection</marquee>
    </span>

    <div id="left_side">

        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_student" value="Search Student">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="edit_student" value="Edit Student">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="add_student" value="Add Student">
                    </td>
                </tr>


                <tr>
                    <td>
                        <input type="submit" name="delet_student" value="Delet Student">
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

                <?php


                    }
                }
                ?>

                <!========================search student end=============================*/ /**=========================Edit student start=========================*/!>


                    <?php


                    if (isset($_POST['edit_student'])) {

                    ?>
                        <center>
                            <form action="" method="post">
                                Enter Roll No:
                                <input type="text" name="ID">
                                <input type="submit" name="search_by_roll_no_for_edit" value="Search">
                            </form>
                        </center>

                        <?php
                    }
                    if (isset($_POST['search_by_roll_no_for_edit'])) {
                        $query = "select * from student where ID='$_POST[ID]'";
                        $query_run = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                            <form action="admin_edit.php" method="post">
                                <table>
                                    <tr>
                                        <td><b> Roll No:</b></td>
                                        <td>
                                            <input type="int" name="id" value="<?php echo $row['ID']; ?>">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><b> Name:</b></td>
                                        <td>
                                            <input type="varchar" name="name" value="<?php echo $row['Name']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b> Total Dues:</b></td>
                                        <td>
                                            <input type="int" name="dues" value="<?php echo $row['Total_Dues']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b> Last Date to Pay:</b></td>
                                        <td>
                                            <input type="varchar" name="last_date_to_pay" value="<?php echo $row['Last_Date_to_Pay']; ?>">
                                        </td>
                                    </tr><br><br>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="edit" value="Save">

                                        </td>

                                    </tr>

                                </table>


                            </form>
                    <?php


                        }
                    }
                    ?>

                    <! /**===========================Edit student end=============================*/!>


                        <! /**===========================Add new student start=============================*/!>

                            <?php

                            if (isset($_POST['add_student'])) {
                            ?>
                                <center>
                                    <h4>Fill the given details:</h4>
                                </center>
                                <center>
                                    <form action="add_student.php" method="post">
                                        <table>

                                            <tr>
                                                <td>Roll No:</td>
                                                <td>
                                                    <input type="int" name="id" required>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>Name:</td>
                                                <td>
                                                    <input type="varchar" name="name" required>
                                                </td>

                                            </tr>


                                            <tr>
                                                <td>Total Dues</td>
                                                <td>
                                                    <input type="varchar" name="dues">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Last Day to Pay</td>
                                                <td>
                                                    <input type="varchar" name="last_date_to_pay">
                                                </td>

                                            </tr>
                                            <br><br>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    &nbsp &nbsp &nbsp &nbsp <input type="submit" name="add" value="Add Student">
                                                </td>

                                            </tr>



                                        </table>



                                    </form>
                                </center>
                            <?php
                            }
                            ?>
                            <! /**===========================Add new student end=============================*/!>



                                <! /**===========================Delet student start=============================*/!>

                                    <?php

                                    if (isset($_POST['delet_student'])) {
                                    ?>
                                        <center>
                                            <h4>Enter Roll to Delet :</h4>
                                        </center>
                                        <center>
                                            <form action="delet_student.php" method="post">
                                               Roll No:
                                               <input type="int" name="id">
                                               <input type="submit"  value="Delet Student">
                                            </form>
                                        </center>
                                    <?php
                                    }
                                    ?>







        </div>


    </div>

</body>

</html>