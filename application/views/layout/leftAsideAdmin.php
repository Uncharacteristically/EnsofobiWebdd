<?php

/*
  Copyright Jan 25, 2014  Ensofobi Inc.
  Author greg,
 */
?>
<aside>
    <!-- search box -->
    <div class="main-search">
        <label for="main-search"><i class="icon-search"></i></label>
        <input id="main-search" type="text" placeholder="Search Network">
    </div>
    <div class="divider"></div>
    <!--profile header -->
    <div class="my-profile">
        <a href="javascript:void(0)" class="my-profile-pic">
            <?php if($avatar!=""){
                echo <<<EOT
                <img class='user_profile_avatar' alt='User Avatar' src='$avatar'/>
EOT;
            }?>
        </a>
        <span class="first-child">Welcome <strong><span id="firstNameSpan"><?php echo $first_name; ?></span><span id="profilePhotoSpan"></span></strong></span>
        <span><a href="javascript:void(0);">View live Profile </a></span>
    </div>
    <div class="divider"></div>
    <!-- end aside item: Mini profile -->
    <!-- aside item: Menu -->
    <div class="sidebar-nav-fixed">
        <ul class="menu" id="accordion-menu-js">
            <li class="current">
                <a href="javascript:void(0)" class="current"><i class="icon-edit"></i>Edit/ Preview <span class="badge">5</span></a>
                <ul>
                    <li class="current"><a href="#" id="publiclink">Public Profile</a></li>
                    <li><a href="#" id="profilelink">Edit Profile Info</a></li> 
                   <li><a href="#" id="photoeditorlink">Photos/Videos </a></li>
                    
                    <li><a href="services.html">Edit Services</a></li>
                    <li><a href="javascript:void(0);" class="logout-js" data-rel="login.html">Logout</a></li>
                </ul>
            </li>
            <li class=""><a href="#" id="requestlink"><i class="icon-envelope"></i>Requests & Interests</a></li>
            <li class=""><a href="javascript:void(0)"><i class="icon-check"></i>Advertising<span class="badge">1</span></a>
                <ul>
                    <li><a href="promotions_admin.html">Promo/Campaign</a></li>
                </ul>
            </li>
            <li class=""><a href="sponsors_admin.html"><i class="icon-user"></i>Sponsors<span class="badge"></span></a></li>
            <li class=""><a href="javascript:void(0)"><i class="icon-signal"></i>Tools<span class="badge">3</span></a>
                <ul>
                    <li><a href="basic_charts.html">Anaylytics</a></li>
                    <li><a href="networks.html">Networks</a></li>
                    <li><a href="#">Fobi Spheres</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="divider"></div>
<!-- end aside item: Menu -->
    <div class="topfobi span4">
        <div id="topholderarts"><strong><a href="browser_top10.php">Top Fobi Arts</a></strong></div>
        <div class="thumsbhold">
            <ul class="thumbnails">
                <li>
                    <a href="#" data-toggle="tooltip" title="User Name" class="thumbnail">
                        <img src="/images/1.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/2.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/3.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/5.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/7.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/8.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>

                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/9.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/10.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
            </ul>
        </div>
        <br />
        <div id="topholderbusiness"><strong><a href="browser_top10.php">Top Fobi Business</a></strong></div>
        <div class="thumsbhold">
            <ul class="thumbnails">
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/1.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/2.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/3.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/5.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/7.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/8.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>

                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/9.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/10.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
            </ul>
        </div>
        <div id="topholdercommunity"><strong><a href="browser_top10.php">Top Fobi Community</a></strong></div>
        <div class="thumsbhold">
            <ul class="thumbnails ">
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/1.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/2.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/3.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/5.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/7.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/8.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>

                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/9.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/10.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/4.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
                <li>
                    <a href="#" class="thumbnail">
                        <img src="/images/6.gif" alt="1" width="25" height="25" border="0" />
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="divider"></div>
<!-- aside item: Inbox -->
<!-- inbox message 1-->
    <div class="mini-inbox">
        <div class="alert inbox">
            <button type="button" class="close" data-dismiss="alert">
                ×
            </button>

            <a href="javascript:void(0)">
                <img src="/img/email-important.png" width="22" height="18" alt="important mail" />
                From:David S...
            </a>
            Dear Victoria, Congratulations! You work has been uploade...
        </div>
        <!-- inbox message 2-->
        <div class="alert inbox">
            <button type="button" class="close" data-dismiss="alert">
                ×
            </button>
            <a href="javascript:void(0)">
                <img src="/img/email-unread.png" width="22" height="18" alt="important mail" />
                Re:Last Year...
            </a>
            Hey Vicky, find attached! Thx :-)
        </div>
        <!-- inbox message 3-->
        <div class="alert inbox last-child">
            <button type="button" class="close" data-dismiss="alert">
                ×
            </button>
            <a href="javascript:void(0)">
                <img src="/img/email-unread.png" width="22" height="18" alt="important mail" />
                Company Party
            </a>
            Hi, You have been cordially invited to join new year...
        </div>

    </div>

    <div class="divider"></div>
<!-- end aside item: Inbox -->
</aside>


