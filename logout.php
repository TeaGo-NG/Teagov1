<?php
include('functions/init.php');

$data = $_SESSION['user'];

//get last seen
$lastseen = date('Y-m-d h:i:sa');

$sql = "UPDATE user SET `lstseen` = '$lastseen' WHERE `user` = '$data'";
$res = query($sql);

//destroy session
session_destroy();

//redirect to login page
redirect("./welcome");
?>