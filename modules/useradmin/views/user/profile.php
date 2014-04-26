<div class="container">

    <div class="row">

    </div>

    <div class="row">

        <div class="col-lg-12">

            <ul>

                <li><?php echo HTML::anchor('user/profile_edit', __('Edit profile')); ?></li>

                <li><?php echo HTML::anchor('user/logout', __('Logout')); ?></li>

            </ul>

        </div>

    </div>

    <div class="row">

        <div class=" col-lg-6 span6">

            <div class="right-login well-lg">

                <p class="intro">This is your user information, <?php echo $user->username ?>.</p>



                <h6>Username &amp; Email Address</h6>

                <p><?php echo $user->username ?> &mdash; <?php echo $user->email ?></p>



                <h6>Login Activity</h6>

                <p>Last login was <?php echo date('F jS, Y', $user->last_login) ?>, at <?php echo date('h:i:s a', $user->last_login) ?>.<br/>Total logins: <?php echo $user->logins ?></p>



            </div>

        </div>

    </div>

</div>

