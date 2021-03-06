<div class="mobile-header-wrapper sticky d-block d-lg-none">
    <div class="mobile-header position-relative ">
        <div class="mobile-logo">
            <a href="./">
                <img src="assets/images/logo.png" alt="TeaGo COSE">
            </a>
        </div>
        <div class="mobile-menu w-100">
            <ul>
                <!--<li>
                    <button class="notification request-trigger"><i class="flaticon-users"></i>
                        <span>1</span>
                    </button>
                    <ul class="frnd-request-list">
                        <li>
                            <div class="frnd-request-member">
                                <figure class="request-thumb">
                                    <a href="./profile">
                                        <img src="<?php echo $pix; ?>" alt="<?php echo $user; ?>">
                                    </a>
                                </figure>
                                <div class="frnd-content">
                                    <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                    <p class="author-subtitle">Works at HasTech</p>
                                    <div class="request-btn-inner">
                                        <button class="frnd-btn">confirm</button>
                                        <button class="frnd-btn delete">delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </li>-->
                <li>
                    <button class="notification"><i class="flaticon-notification"></i>
                        <span>03</span>
                    </button>
                </li>
                <li>
                    <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                        <span>04</span>
                    </button>
                    <div class="mobile-chat-box">
                        <div class="live-chat-title">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="profile.html">
                                    <figure class="profile-thumb-small profile-active">
                                        <img src="assets/images/profile/profile-35x35-13.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->
                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                <span class="active-pro">active now</span>
                            </div>
                            <div class="live-chat-settings ml-auto">
                                <button class="chat-settings"><img src="assets/images/icons/settings.png"
                                        alt=""></button>
                                <button class="close-btn"><img src="assets/images/icons/close.png" alt=""></button>
                            </div>
                        </div>
                        <div class="message-list-inner">
                            <ul class="message-list custom-scroll">
                                <li class="text-friends">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum
                                        as their default model text</p>
                                    <div class="message-time">10 minute ago</div>
                                </li>
                                <li class="text-author">
                                    <p>Many desktop publishing packages and web page editors</p>
                                    <div class="message-time">5 minute ago</div>
                                </li>
                                <li class="text-friends">
                                    <p>packages and web page editors </p>
                                    <div class="message-time">2 minute ago</div>
                                </li>
                                <li class="text-friends">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum
                                        as their default model text</p>
                                    <div class="message-time">10 minute ago</div>
                                </li>
                                <li class="text-author">
                                    <p>Many desktop publishing packages and web page editors</p>
                                    <div class="message-time">5 minute ago</div>
                                </li>
                                <li class="text-friends">
                                    <p>packages and web page editors </p>
                                    <div class="message-time">2 minute ago</div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-text-field mob-text-box">
                            <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                            <button class="chat-message-send" type="submit" value="submit">
                                <img src="assets/images/icons/plane.png" alt="">
                            </button>
                        </div>
                    </div>
                </li>
                <li>
                    <button class="search-trigger">
                        <i class="search-icon flaticon-search"></i>
                        <i class="close-icon flaticon-cross-out"></i>
                    </button>
                    <div class="mob-search-box">
                        <form class="mob-search-inner">
                            <input type="text" placeholder="Search Here" class="mob-search-field">
                            <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mobile-header-profile">
            <!-- profile picture end -->
            <div class="profile-thumb profile-setting-box">
                <a href="javascript:void(0)" class="profile-triger">
                    <figure class="profile-thumb-middle">
                        <img src="<?php echo $pix; ?>" alt="<?php echo $user; ?>">
                    </figure>
                </a>
                <div class="profile-dropdown text-left">
                    <div class="profile-head">
                        <h5 class="name"><a href="#"><?php echo $user; ?></a></h5>
                        <a class="mail" href="#"><?php echo $t_users['email']; ?></a>
                    </div>
                    <div class="profile-body">
                        <ul>
                            <li><a href="./profile"><i class="flaticon-user"></i>Profile</a></li>
                            <li><a href="./inbox"><i class="flaticon-message"></i>Inbox</a></li>
                        </ul>
                        <ul>
                            <li><a href=".././logout"><i class="flaticon-unlock"></i>Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- profile picture end -->
        </div>
    </div>
</div>