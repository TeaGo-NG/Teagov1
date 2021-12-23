<div class="col-lg-12 order-2 order-lg-1">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card card-profile widget-item p-0">
            <div class="profile-banner">
                <figure class="profile-banner-small">
                    <a href="./profile">
                        <img src=" <?php echo $cover; ?>" width="400px;" height="200px"
                            alt="<?php echo $t_users['user']; ?>">
                    </a>
                    <a href="./" class="profile-thumb-2">
                        <img src="<?php echo $pix; ?>" alt="<?php echo $t_users['user']; ?>">
                    </a>
                </figure>
                <div class="profile-desc text-center">
                    <h6 class="author"><a href="./profile">Welcome Back
                            <?php echo $t_users['user']; ?></a></h6>
                    <p>Last seen:<br />
                        <?php echo date('D, F d, Y - h:i:sa', strtotime($t_users['lstseen'])); ?>
                    </p>


                </div>
            </div>
        </div>
        <!-- widget single item start -->



        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">latest top news</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="assets/images/profile/profile-35x35-20.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you
                                    want</a></h3>
                            <p class="list-subtitle">2 min ago</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- widget single item end -->
    </aside>
</div>