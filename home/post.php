<?php
include("../functions/init.php");

//validate user login
if(!isset($_SESSION['user']) || $_SESSION['user'] == '') {
    redirect("./welcome");
} else {

    $GLOBALS['user'] = $_SESSION['user'];
}

user_details();

if (!isset($_GET['read'])) {
    
    redirect("./");
}else{
    $data = $_GET['read'];
    $sql = "SELECT * FROM article WHERE `articleurl` = '$data'";
    $res = query($sql);

if (row_count($res) == "") {
        
      redirect("./opps");  
}else{
    $row  = mysqli_fetch_array($res);
    
}
}
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



                    <?php include("components/newsfeed/leftsidebar.php"); ?>
                     <div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="<?php echo $pix; ?>" alt="<?php echo $t_users['user']; ?>">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Share a gist"
                                            data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Gist</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <input type="text" class="form-control custom-scroll" id="title"
                                                    placeholder="Input your gist title">
                                                <p class="text-danger ml-1" id="tmsg"></p>
                                            </div>
                                            <div class=" modal-body custom-scroll">
                                                <textarea name="share" class="share-field-big custom-scroll" id="gist"
                                                    placeholder="Tell us your gist"></textarea>
                                                <p class="text-danger ml-1" id="gmsg"></p>
                                            </div>
                                            <p class="text-danger ml-3" id="umsg"></p>
                                            <div class=" modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <button type="button" id="pst" class=" post-share-btn">post</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                        <!-- share box end -->

                        <div class="scrollable bg-transparent">

                            <?php

                            $sql = "SELECT * FROM article WHERE `articleurl` = '$data'";
                            $res = query($sql);
                            $row = mysqli_fetch_array($res)

                            ?>

        <!-- post status start -->
        <div class="card">
            <!-- post title start -->
            <div class="post-title d-flex align-items-center">
                <!-- profile picture end -->
                <div class="profile-thumb">
                    <a href="#">
                        <figure class="profile-thumb-middle">
                            <img src="<?php echo $row['uspix'] ?>" alt="<?php echo $row['user'] ?>">
                        </figure>
                    </a>
                </div>
                <!-- profile picture end -->

                <div class="posted-author">
                    <h6 class="author"><a style="text-decoration: none"
                            href="./<?php echo $row['user'] ?>"><?php echo $row['user'] ?></a></h6>
                    <span class="post-time"><?php echo psttdff($date); ?></span>
                </div>


            </div>
            <!-- post title start -->
            <div class="post-content">
                
                    <b>
                        <p class="post-desc">
                            <?php echo ucwords($row['title']) ?>
                        </p>
                    </b>
                    <p class="post-desc">
                        <?php echo $row['post'] ?>
                    </p>
             
                <div class="post-meta">
                    <button class="post-meta-like" id="unlike" onclick="unlike()">
                        <i class="fa fa-star fa-4x" style="color: #be1e2d; "></i>
                        <span><?php echo number_format($row['react']) ?></span> 
                    </button>
                    <button class="post-meta-like" id="like" onclick="like()">
                        <i class="fa fa-star-o fa-4x"></i>
                        <span><?php echo number_format($row['react']) ?></span> 
                    </button>
                    <ul class="comment-share-meta">
                        <li>
                            <button class="post-comment">
                                <i class="bi bi-chat-bubble"></i>
                                <span><?php echo number_format($row['comment']) ?></span>
                            </button>
                        </li>
                        <li>
                            <button class="post-share" data-toggle="modal" data-target="#modal">
                                <i class="bi bi-share"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="">
                <div class="" style="">
                    <div class="col-12 row">
                        <div class="" style="width: 80%; margin-left: 0px; margin-right:" >
                        <textarea name="share" class="" style="border-radius: 20px; background-color: #e6e6e6; width: 100%; height: 40px; padding: 10px; border-color: #999999; overflow: hidden;" aria-disabled="true" placeholder=" Post Comment!" id="content"></textarea>
                        </div>
                        <div class="" style="width: 20%;">
                            <button type="button" id="comment_btn"  class="post-share-btn">Post</button>
                        </div>
                    </div>
                    
                    <p id="msg"></p>
                    <input type="text" id="post_id" hidden value="<?php echo $row['sn']; ?>">
                    <input type="text" id="user" hidden value="<?php echo $user; ?>">
                </div>

            </div><br>
            <div class="widget-item">
                <h6 class="widget-title"><b>Comments</b></h6>
                <div id="show">
                    <?php 
                    $post = $row['sn'];
                    $ssl = "SELECT * FROM comments WHERE `post_id` = '$post' ORDER BY `id` DESC";
                    $rsl = query($ssl);

                    while($row = mysqli_fetch_array($rsl)) {

                    ?>      
                            <div class=" row">
                            <div class="" >
                                <img style="max-height: 40px; max-width: 40px;" class="responsive" src="assets/images/log.png">
                            </div>
                            <div class="" style="max-width: 87%; padding-left: 20px;">
                                <div style="border-radius: 10px; background-color: #e6e6e6;" >
                                    <div class="share-text-field" style="height: fit-content ; border-radius: 15px;">
                                        <div class="row">
                                            <p class="col-12" style="margin: 7px"><strong><?php echo $row['user'];  ?></strong></p>
                                            <!-- <small class="col-12"><?php echo $row['datecommented'];  ?></small> -->
                                        </div>
                                        <div style="margin: -10px 10px 10px 10px"><?php echo $row['comment'];  ?></div>
                                    </div>
                                </div>

                            </div>
                            </div><br>
                            
                    <?php 
                    }

                 
                ?>
                </div>
            </div>
        </div>
        <!-- post status end -->
        <div class="modal fade" id="modal">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div style="border-radius: 10px 10px 10px 10px; border-style: solid; border-color: #be1e2d; border-width: 2px;" class="modal-content">
                      <div class="modal-body">
                        <div>Share:</div>
                        <div style="color: white;" class="text-center">
                            <a href="https://api.whatsapp.com/send?text=<?php echo $url;?>" data-action="share/whatsapp/share" data-media="<?php echo $row['photo']; ?>">
                                <span class="fa fa-whatsapp fa-3x" style="color:#4AC959; margin:20px;"></span></a>
                            <a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?><?php echo $row['articleurl'] ?>"target="_blank" title="Facebook" data-media="<?php echo $row['photo']; ?>">
                                <span class="fa fa-facebook fa-3x" style="color:#3b5998; margin:20px;"></span></a>
                            <a href="http://twitter.com/home?status=<?php echo $url; ?><?php echo $row['articleurl'] ?>" target="_blank" title="Twitter" data-media="<?php echo $row['photo']; ?>">
                                <span class="fa fa-twitter fa-3x" style="color:#00acee; margin:20px;"></span></a>
                            <span class="fa fa-copy fa-3x" style="color:#be1e2d; margin:20px;" onclick="copy()"></span>
                            <div><h6 id="copied"></h6></div>
                            <input type="text" hidden value="<?php echo $url; ?><?php echo $row['articleurl'] ?>" id="copy">
                            
                        </div>
                      </div>
                  </div>
              </div>
          </div>

   


    </div>


</div>
                    
                    <?php include("components/newsfeed/rightsidebar.php"); ?>


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
    <!-- font awesome JS -->
    <script src="assets/js/fontawesome.min.js"></script>
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
    <script src="../js/ajax.js"></script>

    <script>
        var like_button=document.getElementById('like');
        var unlike_button = document.getElementById('unlike');
        unlike_button.style.display="none";

        function like(){
        like_button.style.display="none";
        unlike_button.style.display="block";

        }

        function unlike(){
        like_button.style.display="block";
        unlike_button.style.display="none";

        }
    </script>
    <script>
        function copy() {
    /* Get the text field */
    var copyText = document.getElementById("copy");

    /* Select the text field */
    copyText.select("copy");
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */

    document.getElementById("copied").innerHTML = "Post Link Copied!";;
    }
    </script>
</body>

</html>