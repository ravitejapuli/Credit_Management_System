<?php
    $con = mysqli_connect('localhost','root','','credit_mgt_system');
    if(!$con){
        die('Could not connect: '.mysqli_error($con));
    }
?>