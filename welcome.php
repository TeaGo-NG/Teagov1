<?php
include("functions/init.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TeaGo COSE - Create a Free Account</title>

    <meta charset="utf-8">
    <meta name="title" content="TeaGo COSE - Create a Free Account">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--  Social tags      -->
    <meta name="keywords" content="TeaGo, Teago NG, COSE">
    <meta name="description" content="TeaGo COSE - Create a Free Account">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="TeaGo COSE - Create a Free Account">
    <meta itemprop="description" content="TeaGo COSE - Create a Free Account">

    <meta itemprop="image" content="https://cose.teagonig.com/home/assets/images/logo.png">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta name="description" content="TeaGo COSE - Create a Free Account">
    <meta name="keywords" content="TeaGo COSE - Create a Free Account">
    <meta property="og:title" content="TeaGo COSE - Create a Free Account" />
    <meta property="og:image" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:url" content="https://cose.teagonig.com/home/assets/images/logo.png" />
    <meta property="og:site_name" content="TeaGo COSE - Create a Free Account" />
    <meta property="og:description" content="TeaGo COSE - Create a Free Account" />
    <meta name="theme-color" content="#be1e2d">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup" id="signup" hidden>
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fname" id="fname" placeholder="Your full name" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="usrname" id="usrname" placeholder="Create a username" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pwd" id="pword" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpwd" id="cpword" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <b>
                                    <p class="signup-image-link" style="color: #be1e2d" id="msg"></p>
                                </b>
                            </div>
                            <div class="form-group form-button">
                                <input type="button" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>

                            <a style="cursor: pointer" onclick="signin()" class="signup-image-link">I'm already a
                                member</a>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sign up image"></figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- sign in  Form -->
        <section class="sign-in" id="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sign up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method=" POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="luname" id="luname" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="lpword" id="lpword" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <b>
                                    <p class="signup-image-link" style="color: #be1e2d" id="lmsg"></p>
                                </b>
                            </div>

                            <div class="form-group form-button">
                                <input type="button" name="lsignin" id="lsignin" class="form-submit" value="Sign in" />
                            </div>
                            <a style="cursor: pointer" class="signup-image-link mr-0 ml-0">Forgot Password</a>
                            &nbsp;&nbsp;
                            |
                            &nbsp;&nbsp; <a style="cursor: pointer" onclick="signup()"
                                class="signup-image-link mr-0 ml-0">Create
                                account</a>
                        </form>
                        <!--<div class="social-login">
                            <span class="social-label">Or login with</span>
                           <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>

        <!-- verify notifications --->
        <section class="verify" id="verify" hidden>
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sign up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">ACTIVATE ACCOUNT</h2>

                        <p>We've sent a link to your registered email.</p>
                        <p>Kindly check your inbox and spam folders to activate your email</p>
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

<!-- hide elements -->
<script>
function signup() {
    document.getElementById('signup').style.display = 'block';
    document.getElementById('sign-in').style.display = 'none';

}

function signin() {
    document.getElementById('signup').style.display = 'none';
    document.getElementById('sign-in').style.display = 'block';

}

function verify() {
    document.getElementById('signup').style.display = 'none';
    document.getElementById('sign-in').style.display = 'none';
    document.getElementById('verify').style.display = 'block';
}
</script>

</html>