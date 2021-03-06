 <!-- header area start -->
 <header>
     <div class="header-top sticky bg-white d-none d-lg-block">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-md-5">
                     <!-- header top navigation start -->
                     <div class="header-top-navigation">
                         <nav>
                             <ul>
                                 <li class="active"><a href="./">home</a></li>
                                 <li class="msg-trigger">
                                     <a class="msg-trigger-btn" href="#a">message</a>
                                     <div class="message-dropdown" id="a">
                                         <div class="dropdown-title">
                                             <p class="recent-msg">recent message</p>

                                         </div>
                                         <ul class="dropdown-msg-list">
                                             <li class="msg-list-item d-flex justify-content-between">
                                                 <!-- profile picture end -->
                                                 <div class="profile-thumb">
                                                     <figure class="profile-thumb-middle">
                                                         <img src=" <?php echo $pix; ?>" alt="<?php echo $user; ?>">
                                                     </figure>
                                                 </div>
                                                 <!-- profile picture end -->

                                                 <!-- message content start -->
                                                 <div class="msg-content">
                                                     <h6 class="author"><a href="./">TeaGo COSE</a></h6>
                                                     <p>We are currently working hard to unlock this feature</p>
                                                 </div>
                                                 <!-- message content end -->

                                                 <!-- message time start -->
                                                 <div class="msg-time">
                                                     <p><?php echo timediffrnce(); ?></p>
                                                 </div>
                                                 <!-- message time end -->
                                             </li>


                                         </ul>
                                         <div class="msg-dropdown-footer">
                                             <button>See all in messenger</button>
                                             <button>Mark All as Read</button>
                                         </div>
                                     </div>
                                 </li>
                                 <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
                                     <div class="message-dropdown" id="b">
                                         <div class="dropdown-title">
                                             <p class="recent-msg">Notification</p>

                                         </div>
                                         <ul class="dropdown-msg-list">
                                             <li class="msg-list-item d-flex justify-content-between">
                                                 <!-- profile picture end -->
                                                 <div class="profile-thumb">
                                                     <figure class="profile-thumb-middle">
                                                         <img src="<?php echo $pix; ?>" alt="<?php echo $user; ?>">
                                                     </figure>
                                                 </div>
                                                 <!-- profile picture end -->

                                                 <!-- message content start -->
                                                 <div class="msg-content notification-content">
                                                     <a href="profile.html">Robert Faul</a>,
                                                     <a href="profile.html">william jhon</a>
                                                     <p>and 35 other people reacted to your photo</p>
                                                 </div>
                                                 <!-- message content end -->

                                                 <!-- message time start -->
                                                 <div class="msg-time">
                                                     <p>25 Apr 2019</p>
                                                 </div>
                                                 <!-- message time end -->
                                             </li>


                                         </ul>
                                         <div class="msg-dropdown-footer">

                                             <button>Mark All as Read</button>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                     <!-- header top navigation start -->
                 </div>

                 <div class="col-md-2">
                     <!-- brand logo start -->
                     <div class="brand-logo text-center">
                         <a href="./">
                             <img style="width: 50px; height: 50px; z-index: 9999" src="assets/images/log.png"
                                 class="img-rounded" alt="TeaGo COSE">
                         </a>
                     </div>
                     <!-- brand logo end -->
                 </div>

                 <div class="col-md-5">
                     <div class="header-top-right d-flex align-items-center justify-content-end">
                         <!-- header top search start -->
                         <div class="header-top-search">
                             <form class="top-search-box">
                                 <input type="text" placeholder="Search" class="top-search-field">
                                 <button class="top-search-btn"><i class="flaticon-search"></i></button>
                             </form>
                         </div>
                         <!-- header top search end -->

                         <!-- profile picture start -->
                         <div class="profile-setting-box">
                             <div class="profile-thumb-small">
                                 <a href="javascript:void(0)" class="profile-triger">
                                     <figure>
                                         <img src="<?php echo $pix; ?>" alt="<?php echo $user; ?>">
                                     </figure>
                                 </a>
                                 <div class="profile-dropdown">
                                     <div class="profile-head">
                                         <h5 class="name"><a href="#"><?php echo $user; ?></a></h5>
                                         <a class="mail" href="#"><?php echo $t_users['email']; ?></a>
                                     </div>
                                     <div class="profile-body">
                                         <ul>
                                             <li><a href="./profile"><i class="flaticon-user"></i>Profile</a></li>
                                             <li><a href=" ./inbox"><i class="flaticon-message"></i>Inbox</a></li>
                                         </ul>
                                         <ul>
                                             <li><a href=".././logout"><i class="flaticon-unlock"></i>Sign out</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- profile picture end -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header area end -->
 <!-- header area start -->
 <header>