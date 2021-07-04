<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "sms");

$query = "insert into student values($_POST[id],'$_POST[name]','$_POST[dues]','$_POST[last_date_to_pay]')";
$query_run = mysqli_query($connection, $query);





?>
<script type="text/javascript">
    alert("Student Added Successfully");
    window.location.href = "admin_dashboard.php";
</script>