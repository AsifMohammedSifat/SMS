<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "sms");
$query = "update student set Name='$_POST[name]',Total_Dues='$_POST[dues]',Last_Date_to_Pay='$_POST[last_date_to_pay]' where ID='$_POST[id]'";
$query_run = mysqli_query($connection, $query);





?>

<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href = "admin_dashboard.php";
</script>