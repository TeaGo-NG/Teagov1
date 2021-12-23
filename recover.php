<?php
include("functions/init.php");

if(!isset($_GET['vef'])){
    redirect("./welcome");
} else {

if(!isset($_SESSION['usermail'])) {
    
    redirect("./welcome");

} else {

    $vef = $_GET['vef'];
    $usermail = $_SESSION['usermail'];

    //check if verification match
    $sql = "SELECT * FROM user WHERE `email` = '$usermail'";
    $res = query($sql);
    $row = mysqli_fetch_array($res);

    if($row['activator'] == '' || $row['activator'] != $vef) {

        redirect("./welcome");
        
    }

}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TeaGo COSE - Recover Password</title>

    <meta charset="utf-8">
    <meta name="title" content="TeaGo COSE - Recover Password">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--  Social tags      -->
    <meta name="keywords" content="TeaGo, Teago NG, COSE">
    <meta name="description" content="TeaGo COSE - Recover Password">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="TeaGo COSE - Recover Password">
    <meta itemprop="description" content="TeaGo COSE - Recover Password">

    <meta itemprop="image" content="https://cose.teagonig.com/home/assets/images/logo.png">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta name="description" content="TeaGo COSE - Recover Password">
    <meta name="keywords" content="TeaGo COSE - Recover Password">
    <meta property="og:title" content="TeaGo COSE - Recover Password" />
    <meta property="og:image" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:url" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:site_name" content="TeaGo COSE - Recover Password" />
    <meta property="og:description" content="TeaGo COSE - Recover Password" />
    <meta name="theme-color" content="#be1e2d">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="home/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="home/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="home/assets/images/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="home/assets/images/logo.png">
    <meta name="msapplication-TileImage" content="home/assets/images/logo.png">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">



        <!-- forgot password  Form -->
        <section class="forgot" id="forgot">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sign up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form method=" POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="password" name="pword" id="pword" placeholder="Create new password" />
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="password" name="cpword" id="cpword" placeholder="Confirm password" />
                            </div>
                            <div class="form-group">
                                <b>
                                    <p class="signup-image-link" style="color: #be1e2d" id="umsg"></p>
                                </b>
                            </div>

                            <div class="form-group form-button">
                                <input type="button" name="updf" id="updf" class="form-submit"
                                    value="Update Password" />
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>


</body>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>

</html>