<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "sms");
$query = "DELETE FROM `student` WHERE `student`.`ID` =$_POST[id]";

$query_run = mysqli_query($connection, $query);
?>

<script type="text/javascript">
    alert("Deleted Successfully");
    window.location.href = "admin_dashboard.php";
</script>