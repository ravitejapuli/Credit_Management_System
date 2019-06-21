<?php
    include "headerPHP.php";

    $radioInput = $_GET['radioInput'];
    $inp = $_GET['inp'];
    $actualUser = $_GET['user'];

    $credit_query = "UPDATE user_details SET current_credit = current_credit + $inp WHERE name = '$radioInput'";

    $debit_query = "UPDATE user_details SET current_credit = current_credit - $inp where name = '$actualUser'";

    mysqli_query($con, $credit_query);
    mysqli_query($con, $debit_query);

    mysqli_close($con);
?>