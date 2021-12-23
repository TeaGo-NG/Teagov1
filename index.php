<?php
include("functions/init.php");

//validate user login
if(!isset($_SESSION['user']) || $_SESSION['user'] == '') {
    redirect("./welcome");
} else {

    $GLOBALS['user'] = $_SESSION['user'];
    redirect("./home");
}

?>