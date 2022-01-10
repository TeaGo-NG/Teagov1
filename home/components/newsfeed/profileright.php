<div class="col-lg-3 order-3">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Recent Notifications</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="<?php echo $pix; ?>" alt="<?php echo $user; ?>">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">We are working hard to unlock this feature</a></h3>
                            <p class="list-subtitle">5 min ago</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Trending Gist</h4>
            <div class="widget-body scrollable">


                <ul class="like-page-list-wrapper">
                    <?php

$sql = "SELECT * FROM article WHERE `react` BETWEEN 100 AND 9000000000000000 ORDER BY `react` desc LIMIT 10";
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
                            <p class=""><?php echo psttdff($date); ?></p>
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