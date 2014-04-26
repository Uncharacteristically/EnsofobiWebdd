<div class="col-md-8 feed-area span8">
    <div class="feedarea well">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Fobi-Feed</a></li>
                <li><a href="#tab2" data-toggle="tab">About</a></li>
                <li><a href="#tab3" data-toggle="tab">Services</a></li>
            </ul>
            <div class="tab-content">
    		<div class="tab-pane active" id="tab1">
                    <div class="fobiinput well-large">
                        <div class="newsfeed">
                            <div id="textinput">
                                <div class="input-append">
                                    <div id="feed_form">
                                        <form id="feed_post">
                                        <input type="hidden" name="post_author_id" id="post_author_id" value="<?php echo $profile["id"];?>"/>
                                        <input type="hidden" name="parent_id" id="parent_id" value="0"/>
                                        <textarea name="post_content" id="post_content"></textarea>
                                        <button onclick="uploadToFeed();" class="btn"><i class="icon-folder-open">Upload</i></button>
                                        <button id="post_feed"  class="btn btn-primary">Post</button>
                                        </form>
                                    </div>
                                    <div id="reply-form" class="maskhide">
                                        <form id="reply_post">
                                        <input type="hidden" name="parent_id" id="reply_post_id" value=""/>
                                        <input type="hidden" name="post_author_id" id="reply_author_id" value="<?php echo $profile["id"];?>"/>
                                        <textarea name="post_content" id="reply_content"></textarea>
                                        <br class="clear"/>
                                        <button id="reply-cancel" class="btn">Cancel</button>
                                        <button id="post_reply"  class="btn btn-primary">Comment</button>
                                        </form>
                                    </div>
                                    <!--<input class="input-large" id="appendedDropdownButton" type="text">
                                    <div class="btn-group">
                                        <button class="btn"><i class="icon-folder-open"></i>Upload</button>
                                        <button class="btn btn-primary" type="button">Post</button>
                                        <ul class="dropdown-menu">
                                        ...
                                       - </ul>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="fobioption">
                            <div class="mainfeedlinks"><a href="video.php"><img src="images/photouploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a></div>
                        </div>
                        <div class="fobioption">
                            <div class="mainfeedlinks"><a href="video.php"><img src="images/videouploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a></div>
			</div>
                        <div class="fobioption">
                            <div class="mainfeedlinks"><a href="calendar_admin.html"><img src="images/eventsuploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a></div>
                        </div>
                        <div class="fobioption">
                            <div class="mainfeedlinks"><a href="indexadmin.html"><img src="images/newsuploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a></div>
			</div>
                        
                    </div>
                    <div class="fobiefeed2 well-sm" style="clear:both;">
                        <div id="feed">
                        </div>
                    </div>
                </div>
    		<div class="tab-pane" id="tab2">
                    <div class="well-large" style="float:left;" >
                        <img src="images/tempspotlogo.jpg" width="220" height="120">
                    </div>
                    <div class="address well-large">
                        <address>
                         <strong>Twitter, Inc.</strong><br>
                         795 Folsom Ave, Suite 600<br>
                         San Francisco, CA 94107<br>
                         <abbr title="Phone">P:</abbr> (123) 456-7890
                       <hr>
                         <strong>Full Name</strong><br>
                         <a href="mailto:#">first.last@example.com</a>
                       </address>
                    </div>
                    <div class="about">
                        <p>
                            Bacon ipsum dolor sit amet meatball bacon shoulder, pork loin strip steak capicola leberkas.
                            Bacon short loin salami capicola. Short ribs short loin shoulder venison, brisket pig
                            cow frankfurter meatloaf corned beef hamburger ball tip prosciutto shank. Bresaola jowl sirloin 
                            tri-tip kevin sausage salami. Pork loin kevin rump, ball tip boudin shoulder sirloin tail short loin 
                            salami beef chicken leberkas turducken pastrami. Pork rump tri-tip, pork loin pig leberkas bacon t
                            enderloin salami. Beef pork chop bacon turducken tail flank boudin cow spare ribs frankfurter tenderloin.
                        </p>
                        <p>
                            Shank meatloaf beef ribs ground round, tenderloin shoulder filet mignon pig chuck pork chop kielbasa meatball
                            tongue turducken. Turkey shank pig tenderloin, prosciutto short ribs pork loin kielbasa doner bresaola
                            turducken pork belly strip steak. Short ribs ribeye flank pork boudin rump leberkas. Sausage doner 
                            meatball salami drumstick t-bone turkey. Shank turkey salami turducken beef sausage chuck corned beef.
                        </p>
                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    <h3>Services</h3>
                    <div id="servicelist"></div>
                </div>
            </div>
        </div>
    </div>
</div>