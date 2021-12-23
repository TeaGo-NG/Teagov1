<?php
include("functions/init.php");

if(!isset($_GET['vef'])){
    redirect("./welcome");
} else {

if(!isset($_SESSION['usermail'])) {

    redirect("./welcome");
} else {

    $usermail = $_SESSION['usermail'];
    $vef      = $_GET['vef'];

    //check if verification match
    $sql = "SELECT * FROM user WHERE `email` = '$usermail'";
    $res = query($sql);
    $row = mysqli_fetch_array($res);

    if($row['activator'] == '' || $row['activator'] != $vef) {

        redirect("./welcome");
        
    } else {

        $ups = "UPDATE user SET `activator` = '' WHERE `email` = '$usermail'";
        $upq = query($ups);

        $_SESSION['user'] = $row['user'];
        
        redirect("./");
    }
}
}