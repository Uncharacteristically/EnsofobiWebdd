<div class="container">
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 span6 well-lg">
            <div id="home-search">
                <?php echo View::factory("layout/homeSearch");?>
            </div>
            <!--<p><img class="img-responsive img-polaroid" src="http://placehold.it/400x220"></p>-->
        </div>
        <div class=" col-lg-6 span6">
            <div class="right-login well-lg">
                <p><img src="/images/ensofobi_logo_login.jpg" alt="ensofobi Login" /></p>
                <form class="form-horizontal" role="form" method="post" action="/user/login/">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="username" id="inputEmail1" placeholder="Email or Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row col-lg-2 span2">
</div>
<div class="sign-up">
    <div class="signup">

        <div class="well-lg col-lg-10 span10">
            <div class="well-lg">

                <img src="/images/sign-up.gif" width="380" height="38" />
            </div>

            <ul class="thumbnails">
                <li class="span3 ">
                    <a href="/user/register/business/" class="thumbnail space">
                        <h3>Fobi Business</h3>
                        <img src="/images/dollarsign.gif" width="180" height="180" border="0" />
                        <p>
                        <ul>
                            <li><strong>Local place</strong></li>
                            <li><strong>Small company</strong></li>
                            <li><strong>Brand</strong></li>
                            <li><strong>Institution</strong></li>
                            <li><strong>Corporation</strong></li>
                            <li><strong>Self employed</strong></li>

                </li>
            </ul>
            </p>

            </a>
            </li>
            <li class="span3 ">

                <a href="/user/register/organization/" class="thumbnail space">
                    <h3>Fobi Other</h3>
                    <img src="/images/community.gif" width="180" height="180" border="0" />
                    <p>

                    <ul>
                        <li><strong>Organization</strong>	    </li>
                        <li><strong>Non-profit</strong></li>
                        <li><strong>Sports </strong></li>
                        <li><strong>Hobbies</strong></li>
                        <li><strong>Fan-pages</strong></li>
                    </ul>
                    </p>
                </a>
            </li>
            <li class="span3 ">

                <a href="/user/register/art/" class="thumbnail space">
                    <h3>Fobi Arts</h3>
                    <img src="/images/arts.gif" width="180" height="180" border="0" />

                    <p>
                    <ul>
                        <li><strong>Artist</strong></li>
                        <li><strong> Group</strong></li>
                        <li><strong> Public-figure</strong></li>
                        <li><strong>Entertainer</strong></li>
                    </ul>
                    </p>
                </a>
            </li>

            </ul>
        </div>

    </div>
</div>
<div class="well-lg col-lg-2 span2">
</div>
<hr>
<br/>
<div style="margin-left:260px;"> <a href="Freeresume.php"><img src="/images/freemarketingresume.jpg" width="400" height="100" alt="free" /></a>

</div>
<div id="home-live" class='mask-hide'>
    <?php echo View::factory("layout/homePreview");?>
</div>
<div id="home-mask">
</div>