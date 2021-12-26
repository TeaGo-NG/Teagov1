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
                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something"
                        data-toggle="modal" data-target="#textbox" id="email"></textarea>
                    <button class="btn-share" type="submit">share</button>
                </form>
            </div>
            <!-- share content box end -->

            <!-- Modal start -->
            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Share Your Mood</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-scroll">
                            <textarea name="share" class="share-field-big custom-scroll"
                                placeholder="Say Something"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                            <button type="button" class="post-share-btn">post</button>
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

$sql = "SELECT * FROM article ORDER BY RAND() desc LIMIT 10";
$res = query($sql);

while($row = mysqli_fetch_array($res)) {

    $date = $row['dateposted'];



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
                <?php 

                if($row['pix'] == null) {


                } else {

                echo '

                <div class="post-thumb-gallery img-gallery">
                <div class="row no-gutters">
                    <div class="col-12">
                        <figure class="post-thumb">
                            <a class="gallery-selector" href="assets/images/post/post-1.jpg">
                                <img src="assets/images/post/post-1.jpg" width="510px" height="270px" alt="post image">
                            </a>
                        </figure>
                    </div>

                </div>
                </div>';
                }

                ?>

                <div class="post-meta">
                    <button class="post-meta-like">
                        <i class="bi bi-love"></i>
                        <span>You and 70 people like this</span>
                        <strong>70</strong>
                    </button>
                    <ul class="comment-share-meta">
                        <li>
                            <button class="post-comment">
                                <i class="bi bi-chat-bubble"></i>
                                <span>28</span>
                            </button>
                        </li>
                        <li>
                            <button class="post-share">
                                <i class="bi bi-share"></i>
                                <span>12</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- post status end -->

        <?php
}
?>


    </div>


</div>