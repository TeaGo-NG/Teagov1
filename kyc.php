<?php
include("functions/init.php");
if(!isset($_SESSION['user'])) {
    
    redirect("./welcome");

} else {

    $data = $_SESSION['user'];

    //get user password as an id to kyc portal
    $sql = "SELECT * FROM user WHERE `user` = '$data'";
    $res = query($sql);
    if(row_count($res) == null) {

        redirect("./welcome");

    } else {

        $row = mysqli_fetch_array($res);

        $newid = $row['pword'];
        
    }

header("refresh:5;url=kyc/welcome?kyclearner=$newid");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TeaGo COSE - Know Your Campus (KYC)</title>

    <meta charset="utf-8">
    <meta name="title" content="TeaGo COSE - Know Your Campus (KYC)">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--  Social tags      -->
    <meta name="keywords" content="TeaGo, Teago NG, COSE">
    <meta name="description" content="TeaGo COSE - Know Your Campus (KYC)">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="TeaGo COSE - Know Your Campus (KYC)">
    <meta itemprop="description" content="TeaGo COSE - Know Your Campus (KYC)">

    <meta itemprop="image" content="https://cose.teagonig.com/home/assets/images/logo.png">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta name="description" content="TeaGo COSE - Know Your Campus (KYC)">
    <meta name="keywords" content="TeaGo COSE - Know Your Campus (KYC)">
    <meta property="og:title" content="TeaGo COSE - Know Your Campus (KYC)" />
    <meta property="og:image" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:url" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:site_name" content="TeaGo COSE - Know Your Campus (KYC)" />
    <meta property="og:description" content="TeaGo COSE - Know Your Campus (KYC)" />
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

        <!-- sign in  Form -->
        <section class="sign-in" id="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="home/assets/images/log2.png" alt="sign up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Yipee!</h2>
                        <p>Your details was verified successfully</p>

                        <p>We are redirecting you to our learning room in the next 5 seconds</p>

                        <div class="form-group form-button">
                            <a style="text-decoration: none;" href="kyc/./welcome?kyclearner=<?php echo $newid ?>"
                                class="button form-submit">Take me there
                                manually</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>


</body>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>
<?php
session_destroy();
}
?>