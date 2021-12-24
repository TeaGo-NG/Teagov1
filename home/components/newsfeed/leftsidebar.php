<div class="col-lg-3 order-2 order-lg-1">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card card-profile widget-item p-0">
            <div class="profile-banner">
                <figure class="profile-banner-small">
                    <a href="./profile">
                        <img src=" <?php echo $cover; ?>" width="400px;" height="180px"
                            alt="<?php echo $t_users['user']; ?>">
                    </a>
                    <a href="./" class="profile-thumb-2">
                        <img src="<?php echo $pix; ?>" alt="<?php echo $t_users['user']; ?>">
                    </a>
                </figure>
                <div class="profile-desc text-center">
                    <h6 class="author"><a href="./profile">Welcome
                            <?php echo $t_users['user']; ?> <i style="color: red;" class="fa-star-half-alt"></i></a>
                    </h6>
                    <p>Last seen:
                        <?php echo timediffrnce(); ?>
                    </p>


                </div>
            </div>
        </div>
        <!-- widget single item start -->



        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">latest News</h4>
            <div class="widget-body scrollable">


                <ul class="like-page-list-wrapper">
                    <?php

$sql = "SELECT * FROM article ORDER BY `sn` desc LIMIT 10";
$res = query($sql);

while($row = mysqli_fetch_array($res)) {

    $date = $row['dateposted'];

?>

                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="./<?php echo $row['user'] ?>">
                                <figure class="profile-thumb-small">
                                    <img src="<?php echo $row['uspix'] ?>" alt="<?php echo $row['user'] ?>">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info ">
                            <h3 class="list-title"><a
                                    href="./read/<?php echo $row['title'] ?>"><?php echo $row['title'] ?></a>
                            </h3>
                            <p class="list-subtitle">2 min ago</p>
                        </div>
                    </li>

                    <?php
                }
                ?>

                </ul>
            </div>
        </div>
        <!-- widget single item end -->
    </aside>
</div>