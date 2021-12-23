<?php
include("../functions/init.php");

//validate user login
if(!isset($_SESSION['user']) || $_SESSION['user'] == '') {
    redirect("./welcome");
} else {

    $GLOBALS['user'] = $_SESSION['user'];
}

user_details();

include("components/head.php");
?>

<body>

    <?php

include("components/header.php");
include("components/mobile.php");
?>


    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">
                    <iframe src="components/newsfeed/leftsidebar.php">

                    </iframe>
                </div>
            </div>
        </div>

    </main>

    <!-- Scroll to top start -->
    <!--<div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>-->
    <!-- Scroll to Top End -->



    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>