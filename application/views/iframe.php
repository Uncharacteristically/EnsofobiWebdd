
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>{JARVIS}Admin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--// OPTIONAL & CONDITIONAL CSS FILES //-->   
	<!-- date picker css -->
	<link rel="stylesheet" href="/css/datepicker.css?v=1">
	<!-- full calander css -->
	<link rel="stylesheet" href="/css/fullcalendar.css?v=1">
	<!-- data tables extended CSS -->
	<link rel="stylesheet" href="/css/TableTools.css?v=1">
	<!-- bootstrap wysimhtml5 editor -->
	<link rel="stylesheet" href="/css/bootstrap-wysihtml5.css?v=1">
	<link rel="stylesheet" href="/css/wysiwyg-color.css">
	<!-- custom/responsive growl messages -->
	<link rel="stylesheet" href="/css/toastr.custom.css?v=1">
	<link rel="stylesheet" href="/css/toastr-responsive.css?v=1">
	<link rel="stylesheet" href="/css/jquery.jgrowl.css?v=1">
	
	<!-- // DO NOT REMOVE OR CHANGE ORDER OF THE FOLLOWING // -->
	<!-- bootstrap default css (DO NOT REMOVE) -->
	<link rel="stylesheet" href="/css/bootstrap.min.css?v=1">
	<link rel="stylesheet" href="/css/bootstrap-responsive.min.css?v=1">
	<!-- font awsome and custom icons -->
	<link rel="stylesheet" href="/css/font-awesome.min.css?v=1">
	<link rel="stylesheet" href="/css/cus-icons.css?v=1">
	<!-- jarvis widget css -->
	<link rel="stylesheet" href="/css/jarvis-widgets.css?v=1">
	<!-- Data tables, normal tables and responsive tables css -->
	<link rel="stylesheet" href="/css/DT_bootstrap.css?v=1">
	<link rel="stylesheet" href="/css/responsive-tables.css?v=1">
	<!-- used where radio, select and form elements are used -->
	<link rel="stylesheet" href="/css/uniform.default.css?v=1">
	<link rel="stylesheet" href="/css/select2.css?v=1">
	<!-- main theme files -->
	<link rel="stylesheet" href="/css/theme.css?v=1">
	<link rel="stylesheet" href="/css/theme-responsive.css?v=1">
    <link rel="stylesheet" href="/css/modbusinessadmin.css">
    
	<!-- // THEME CSS changed by javascript: the CSS link below will override the rules above // -->
	<!-- For more information, please see the documentation for "THEMES" -->
    <link rel="stylesheet" id="switch-theme-js" href="/css/themes/default.css?v=1">   
	
   	<!-- To switch to full width -->
    <link rel="stylesheet" id="switch-width" href="/css/full-width.css?v=1">
    
	<!-- Webfonts -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700' type='text/css'>
	
	<!-- All javascripts are located at the bottom except for HTML5 Shim -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   		<script src="/js/include/respond.min.js"></script>
   	<![endif]-->

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="img/favicons/favicon.png">
	<!-- For everything else -->
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicons/apple-touch-icon-retina.png">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicons/apple-touch-icon-ipad.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon.png">
	
	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Add your custom home screen title: -->
	<meta name="apple-mobile-web-app-title" content="Jarvis"> 

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
	
  </head>

  <body>
  	<!-- .height-wrapper -->
	<div class="height-wrapper">

		<!-- header -->
		<header>
			<!-- tool bar -->
			<div id="header-toolbar" class="container-fluid">
				<!-- .contained -->
				<div class="contained">
					
					<!-- theme name -->
					<h1><img src="/images/ensofobi2.png" width="125" height="30"></h1>
					<!-- end theme name -->
					
					<!-- span4 -->
					<div class="pull-right">
						<!-- demo theme switcher-->
						<div id="theme-switcher" class="btn-toolbar">
							
							<!-- search and log off button for phone devices -->
							<div class="btn-group pull-right visible-phone">
								<a href="javascript:void(0)" class="btn btn-inverse btn-small"><i class="icon-search"></i></a>
								<a href="login.html" class="btn btn-inverse btn-small"><i class="icon-off"></i></a>
							</div>
							<!-- end buttons for phone device -->
							
							<!-- dropdown mini-inbox-->
							<div class="btn-group">
								<!-- new mail ticker -->
								<a href="javascript:void(0)" class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown">
									<span class="mail-sticker">3</span>
									<i class="cus-email"></i>
								</a>
								<!-- end new mail ticker -->
								
								<!-- email lists -->
								<div class="dropdown-menu toolbar pull-right">
									<h3>Inbox</h3>
									<ul id="mailbox-slimscroll-js" class="mailbox">
										<li>
											<a href="javascript:void(0)" class="unread">
												<img src="img/email-important.png" alt="important mail">
												From: David Simpson
												<i class="icon-paper-clip"></i>
												<span>Dear Victoria, Congratulations! Your work has been uploaded to wrapbootstrap.com...</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="unread attachment">
												
												<img src="img/email-unread.png" alt="important mail">
												Re:Last Year sales
												<i class="icon-paper-clip"></i>
												<span>Hey Vicky, find attached! Thx :-)</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="unread">
												<img src="img/email-unread.png" alt="important mail">
												Company Party
												<i class="icon-paper-clip"></i>
												<span>Hi, You have been cordially invited to join new year after party.</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												RE: 2 Bugs found...
												<i class="icon-paper-clip"></i>
												<span>I have found two more bugs in this your beta version, maybe its not working...</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												2 Bugs found...
												<i class="icon-paper-clip"></i>
												<span>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												Welcome to Jarvis!
												<i class="icon-paper-clip"></i>
												<span>Feugiat a, tellus. Phasellus viverra nulla ut metus varius. Quisque rutrum. Aenean imperdiet... </span>
											</a>
										</li>
									</ul>
									<a href="javascript:void(0);" id="go-to-inbox">Go to Inbox <i class="icon-double-angle-right"></i></a>
								</div>
								<!-- end email lists -->
							</div>
							<!-- end dropdown mini-inbox-->
							
							<!-- Tasks -->
							<div class="btn-group hidden-phone">
								<a href="javascript:void(0)" class="btn btn-inverse btn-small">My Tasks</a>
								<a href="javascript:void(0)" class="btn btn-inverse dropdown-toggle btn-small" data-toggle="dropdown"><span class="caret"></span></a>
					
								<div class="dropdown-menu toolbar pull-right">
									<h3>Showing All Tasks</h3>
									<ul class="progressbox">
						                <li>
						                    <strong><i class="online pull-left"></i>Urgent Bug Fixes</strong><b>Complete</b>
						                    <div class="progress progress-success slim"><div class="bar" style="width: 100%;"></div></div>
						                </li>
						                <li>
						                    <strong>Added functionality</strong><b>70%</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 70%;"></div></div>
						                </li>
						                <li>
						                    <strong>CAD Changes</strong><b>50%</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 50%;"></div></div>
						                </li>
						                <li>
						                    <strong>Marketing Campaign Mocup</strong><b>22%</b>
						                    <div class="progress progress-danger slim"><div class="bar" style="width: 22%;"></div></div>
						                </li>
						                <li>
						                    <strong><i class="offline pull-left"></i>Proposal</strong><b>Pending</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 0%;"></div></div>
						                </li>
						            </ul>
								</div>

							</div>
							<!-- end Tasks -->
							
							
							
						</div>
					  	<!-- end demo theme switcher-->
					</div>
					<!-- end span4 -->
				</div>
				<!-- end .contained -->
			</div>
			<!-- end tool bar -->
			
		</header>
		<!-- end header -->
		
		
	    <div id="main" role="main" class="container-fluid">
			<div class="contained">
				<!-- aside -->	
				<aside>	
					
					<!-- search box -->
					<div class="main-search">
						<label for="main-search"><i class="icon-search"></i></label>
	                    <input id="main-search" type="text" placeholder="Search...">
                	</div>
					<div class="divider"></div>
					<!-- end search box -->
										
					<!-- aside item: Mini profile -->
					<div class="my-profile">
						<a href="javascript:void(0)" class="my-profile-pic">
							<img src="img/avatar/avatar_0.jpg" alt="" />
						</a>
						<span class="first-child">Welcome <strong>Victoria!</strong></span>
						<span><a href="javascript:void(0);">Edit Profile </a></span>
					</div>
					<div class="divider"></div>
					<!-- end aside item: Mini profile -->

					<!-- aside item: Menu -->
					<div class="sidebar-nav-fixed">
						
						<ul class="menu" id="accordion-menu-js">
							<li class="current">
								<a href="javascript:void(0)" class="current"><i class="icon-edit"></i>Edit/ Preview <span class="badge">5</span></a>
								<ul>
                                	<li class="current">
										<a href="indexadmin.html">Public Profile</a>
									</li>
                                	 <li >
										<a href="public_photos.html">Photos/Videos </a>
									</li>
                                	 <li>	<a href=ed"editabout.html" data-toggle="">Edit About</a>
									</li>
										

                                    <li>
										<a href="services.html">Edit Services</a>
									</li>
                                   
									<li>
										<a href="javascript:void(0);" class="logout-js" data-rel="login.html">Logout</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="requests_admin.html"><i class="icon-envelope"></i>Requests & Interests</a>
							</li>
							<li class="">
								<a href="javascript:void(0)"><i class="icon-check"></i>Advertising<span class="badge">1</span></a>
								<ul>
									<li>
										<a href="promotions_admin.html">Promo/Campaign</a>
									</li>
									
									
								</ul>
							</li>
							<li class="">
								<a href="sponsors.html"><i class="icon-user"></i>Sponsors<span class="badge"></span></a>
								
							</li>
							<li class="">
								<a href="javascript:void(0)"><i class="icon-signal"></i>Tools<span class="badge">3</span></a>
								<ul>
									<li>
										<a href="basic_charts.html">Anaylytics</a>
									</li>
									<li>
										<a href="networks.html">Networks</a>
									</li>
									<li>
										<a href="#">Fobi Spheres</a>
									</li>
                                  
								</ul>
							</li>
							
					</div>
					<div class="divider"></div>
					<!-- end aside item: Menu -->
					
				</aside>
				<!-- aside end -->
				
				<!-- main content -->
				<div id="page-content">
					<!-- page header -->
					<div class="fluid-container">
                     <div class="">
        	<div class="menu well-small" style="float:right;">
            <ul class="thumbnails">
                <li><a href="merchandise.html"><img src="main-images/merchandise2.png" width="90" height="80"></a>
                </li>
                <li><a href="modole_signup.html"><img src="main-images/analytics2.png" width="90" height="80"></a>
                </li>
                 <li><a href="requests.html"><img src="main-images/requests2.png" width="90" height="80"></a>
                </li>
                <li><a href="sponsors.html"><img src="main-images/sponsors2.png" width="90" height="80"></a>
                </li>
                 <li><a href="promo.html"><img src="main-images/promo2.png" width="90" height="80"></a>
                </li>
                <li><a href="interests.html"><img src="main-images/interests2.png" width="90" height="80"></a>
                </li>
            </ul>
            </div>	
					<h1 id="page-header">Photos & Video</h1>
					

						
						<!-- NO WIDGETS ON THIS PAGE -->
							<div class="row-fluid">
								<article class="span12">
									
									<!-- new widget -->
									<div class="jarviswidget">

									    <!-- wrap div -->
									     
            							
								        <div class="inner-spacer well-large"> 
								      
											<h3>Your Albums</h3>
                                         <p>  <a href="#myModal" role="button" class="btn" data-toggle="modal" class="label label-success">Upload/ Photos & Videos</a></p>
                                         
                                            
                                            
                <div class="thumbnail-navigation" id="thumbnail-nav">
         <div class="navigation-outer-wrap">
             <ul class="thumbnail-navigation-list">
                 
                 <li><a href="#tabs5-pane1" data-toggle="tab"><img src="/images/mainphotos.jpg" /></a></li>
                 <li><a href="#tabs5-pane2" data-toggle="tab"><img src="/images/service.jpg" /></a></li>
                 <li><a href="#tabs5-pane3" data-toggle="tab"><img src="/images/merchphotos.jpg" /></a></li>
                 <li><a href="#tabs5-pane4" data-toggle="tab"><img src="/images/video.jpg" /></a></li>
                 </ul>
         </div>
         </div>
         <hr>
        
						<div class="tab-content">
         <div id="tabs5-pane1" class="margin-top-10 tab-pane">
         <ul class="thumbnails" style="float:left;">
         
               <li class="thumbw">
                <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
               <li class="thumbw">
                <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
              
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
            
              </ul>
         
            
         </div>
         <div id="tabs5-pane2" class="margin-top-10 tab-pane featured-box background-white">
                 <ul class="thumbnails" style="float:left;">
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
               <li class="thumbw">
                <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
              
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
        </ul>
        </div>
          <div id="tabs5-pane3" class="margin-top-10 tab-pane featured-box background-white">
                 <ul class="thumbnails" style="float:left;">
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
               <li class="thumbw">
                <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
              
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
                 
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
               <li class="thumbw">
                <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              
              
              <li class="thumbw">
              <div class="thumbnail ">
                  <img src="http://placehold.it/300x200" alt="">
                  <h4>Title of image</h4>
                  
                  <p>Thumbnail caption...maybe 140 charchters?</p>
                </div>
              </li>
              </ul>
         </div>
       
          <div id="tabs5-pane4" class="margin-top-10 tab-pane featured-box background-white">
                <ul class="thumbnails" style="float:left;">
            
              
               <li class="thumbv">
                <div class="thumbnail ">
             <iframe src="//player.vimeo.com/video/58022280" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/58022280">Shugo Tokumaru "Katachi"</a> from <a href="http://vimeo.com/kijekadamski">Kijek / Adamski</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
              </li>
              
              
              <li class="thumbw">
              <div class="thumbnail "><p><a href="http://vimeo.com/75080234">Trees for Zambia 2013 - T
                <iframe src="//player.vimeo.com/video/75080234" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                he Lapses</a> from <a href="http://vimeo.com/helloiamrory">Rory</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                  
                  
                  
                </div>
              </li>
              </ul>
         </div>
         
     </div>
    				
										
							</div>

										
						</div>
				<div id="myModal" class="modal hide fade modalsizer well-small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Photo/Video Uploader</h3>
    <div id="preview" style="height:150px;border:1px solid #000;overflow:auto;"></div>
<form id="imageform" method="post" enctype="multipart/form-data" action='/photo/upload'>
  <div class="modal-body modalsizer">
  <div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Photos
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
    <div class="accordion-inner">
                 	<div class="control-group">
															<label class="control-label">Choose gallery where you want your photo displayed</label>
       <hr>                                                     
<label class="radio ">
  <input type="radio" id="inlineCheckbox1" name="graphic_type" value="main"> Main Photos 
</label>
<label class="radio ">
  <input type="radio" id="inlineCheckbox2" name="graphic_type"  value="service"> Service Photos 
</label>
<label class="radio ">
  <input type="radio" id="inlineCheckbox3" name="graphic_type"  value="merchandise"> Merchandise 
</label>
			                                                  
                                                             
															</div>
</div>



<div class="control-group">
															<label class="control-label" for="fileInput">File input</label>
															<div class="controls">
																<input class="file" id="photoimg" name="photoimg" type="file" />
																<div class="space"></div>
																
															</div>
														</div>
<div class="control-group">
															<label class="control-label" for="input01">Photo Title</label>
															<div class="controls">
																<input type="text" class="span12"  id="graphic_title" name="graphic_title"/>
															</div>
														</div>
<div class="control-group">
															<label class="control-label" for="textarea">About Photo</label>
															<div class="controls">
																<textarea class="span12" id="graphic_description" name="graphic_description" rows="3"></textarea>
															</div>
</div>
</div></div>
<div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Video
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
<h3>Add Videos to the video tab here</h3>

<div class="control-group">
															<label class="control-label" for="input04">Input Iframe Code</label>
															<div class="controls">
																
																
				<textarea class="span12" id="textarea" rows="3"></textarea>				<p class="help-block">									Add Youtube or Vimeo Iframe text here! 
																</p>
															</div>
														</div>
                                                        </div>
                                                        </div>
                                                        </div>
</div>
                    </div>
                     <div class="modal-footer">
                     </form>
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary" id="photoUploadButton">Save changes</a>
  </div>
   
						</div>	
                   
				<!-- end main content -->
			
				<!-- aside right on high res -->
				<aside class="right">
					
					<!-- sparkline stats -->
					<ul class="mystats indented">
		                <li class="first">
		                    <h1><span>My Balance:</span>$17,349</h1>
		                    <div class="mychart" id="balance" style="width:35px"></div>
		                </li>
		                <li>
		                    <h1><span>Impressions:</span>145k+</h1>
		                    <div class="mychart" id="clicks" style="width:35px"></div>
		                </li>
		                <li>
		                    <h1><span>Subscribers:</span>1,120</h1>
		                    <div class="mychart" id="subscribe" style="width:35px"></div>
		                </li>
		                <li class="last">
		                    <h1><span>Support Ticket:</span>945+</h1>
		                    <div class="mychart" id="support" style="width:35px"></div>
		                </li>
		            </ul>
		            <div class="divider"></div>
		            <!-- end sparkline stats -->
					
					<!-- aside buttons -->
					<div class="aside-buttons">
		                <a href="javascript:void(0)" title="" class="btn btn-primary">Create an Invoice</a>
		            </div>
		            <div class="divider"></div>
		            <!-- end aside buttons -->
		            
				</aside>
				
				<!-- end aside right -->
			</div>
			
	    </div><!--/.fluid-container-->
		<div class="push"></div>
	</div>
	<!-- end .height-wrapper -->	
	
	<!-- footer -->
	
	<!-- if you like you can insert your footer here -->
	
	<!-- end footer -->

    <!--================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/libs/jquery.min.js"><\/script>')</script>
    	<!-- OPTIONAL: Use this migrate scrpit for plugins that are not supported by jquery 1.9+ -->
		<!-- DISABLED <script src="/js/libs/jquery.migrate-1.0.0.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script>window.jQuery.ui || document.write('<script src="/js/libs/jquery.ui.min.js"><\/script>')</script>
    
    <!-- IMPORTANT: Jquery Touch Punch is always placed under Jquery UI -->
    <script src="/js/include/jquery.ui.touch-punch.min.js"></script>
    
    <!-- REQUIRED: Mobile responsive menu generator -->
	<script src="/js/include/selectnav.min.js"></script>

	<!-- REQUIRED: Datatable components -->
    <script src="/js/include/jquery.accordion.min.js"></script>

	<!-- REQUIRED: Toastr & Jgrowl notifications  -->
    <script src="/js/include/toastr.min.js"></script>
    <script src="/js/include/jquery.jgrowl.min.js"></script>
    
    <!-- REQUIRED: Sleek scroll UI  -->
    <script src="/js/include/slimScroll.min.js"></script>
	
	<!-- REQUIRED: Datatable components -->
	<script src="/js/include/jquery.dataTables.min.js"></script>
	<script src="/js/include/DT_bootstrap.min.js"></script>

    <!-- REQUIRED: Form element skin  -->
    <script src="/js/include/jquery.uniform.min.js"></script> 

	<!-- REQUIRED: AmCharts  -->
    <script src="/js/include/amchart/amcharts.js"></script>
	<script src="/js/include/amchart/amchart-draw1.js"></script>

	<script type="text/javascript">
		var ismobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));	
	    if(!ismobile){
	    	
	    	/** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS FALSE **/
	    	
	    	/* REQUIRED: Datatable PDF/Excel output componant */
	    	
	    	document.write('<script src="/js/include/ZeroClipboard.min.js"><\/script>'); 
	    	document.write('<script src="/js/include/TableTools.min.js"><\/script>');
	    	document.write('<script src="/js/include/jquery.uniform.min.js"><\/script>');
	    	document.write('<script src="/js/include/jquery.excanvas.min.js"><\/script>');
	    	document.write('<script src="/js/include/jquery.placeholder.min.js"><\/script>');
	    	
	    	/** DEMO SCRIPTS **/
	        $(function() {
	            /* jarvis tooltips */
				$.jGrowl("This <strong>fluid</strong> Inbox page makes it easy to organize and send messages.", { 
					header: 'Fluid Inbox Page.', 
					sticky: false,
					life: 5000,
					speed: 500,
					theme: 'with-icon',
					position: 'top-right', //this is default position
					easing: 'easeOutBack',
					animateOpen: { 
						height: "show"
					},
					animateClose: { 
						opacity: 'hide' 
					}
				});	
	        });
	        /** end DEMO SCRIPTS **/
	       
	    }else{
	    	
	    	/** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS TRUE **/
	    	
	    	document.write('<script src="/js/include/responsive-tables.min.js"><\/script>');
	    }
	</script>

	<!-- REQUIRED: iButton -->
    <script src="/js/include/jquery.ibutton.min.js"></script>
	
	<!-- REQUIRED: Justgage animated charts -->
	<script src="/js/include/raphael.2.1.0.min.js"></script>
    <script src="/js/include/justgage.min.js"></script>
    
    <!-- REQUIRED: Morris Charts -->
    <script src="/js/include/morris.min.js"></script> 
    <script src="/js/include/morris-chart-settings.js"></script> 
    
    <!-- REQUIRED: Animated pie chart -->
    <script src="/js/include/jquery.easy-pie-chart.min.js"></script>
    
    <!-- REQUIRED: Functional Widgets -->
    <script src="/js/include/jarvis.widget.min.js"></script>
    <script src="/js/include/mobiledevices.min.js"></script>
    <!-- DISABLED (only needed for IE7 <script src="/js/include/json2.js"></script> -->
	
	<!-- REQUIRED: Full Calendar -->
    <script src="/js/include/jquery.fullcalendar.min.js"></script>		
    
    <!-- REQUIRED: Flot Chart Engine -->
    <script src="/js/include/jquery.flot.cust.min.js"></script>			
    <script src="/js/include/jquery.flot.resize.min.js"></script>		
    <script src="/js/include/jquery.flot.tooltip.min.js"></script>		
    <script src="/js/include/jquery.flot.orderBar.min.js"></script> 	
    <script src="/js/include/jquery.flot.fillbetween.min.js"></script>	
    <script src="/js/include/jquery.flot.pie.min.js"></script> 	 
    
    <!-- REQUIRED: Sparkline Charts -->
    <script src="/js/include/jquery.sparkline.min.js"></script>

	<!-- REQUIRED: Infinite Sliding Menu (used with inbox page) -->
	<script src="/js/include/jquery.inbox.slashc.sliding-menu.js"></script> 

	<!-- REQUIRED: Form validation plugin -->
    <script src="/js/include/jquery.validate.min.js"></script>
    
    <!-- REQUIRED: Progress bar animation -->
    <script src="/js/include/bootstrap-progressbar.min.js"></script>
    
    <!-- REQUIRED: wysihtml5 editor -->
    <script src="/js/include/wysihtml5-0.3.0.min.js"></script>
    <script src="/js/include/bootstrap-wysihtml5.min.js"></script>

	<!-- REQUIRED: Masked Input -->
    <script src="/js/include/jquery.maskedinput.min.js"></script>
    
    <!-- REQUIRED: Bootstrap Date Picker -->
    <script src="/js/include/bootstrap-datepicker.min.js"></script>

    <!-- REQUIRED: Bootstrap Wizard -->
    <script src="/js/include/bootstrap.wizard.min.js"></script> 
    
	<!-- REQUIRED: Bootstrap Color Picker -->
    <script src="/js/include/bootstrap-colorpicker.min.js"></script>

    
	<!-- REQUIRED: Bootstrap Time Picker -->
    <script src="/js/include/bootstrap-timepicker.min.js"></script> 
    
    <!-- REQUIRED: Bootstrap Prompt -->
    <script src="/js/include/bootbox.min.js"></script>
    
    <!-- REQUIRED: Bootstrap engine -->
    <script src="/js/include/bootstrap.min.js"></script>
    
    <!-- DO NOT REMOVE: Theme Config file -->
    <script src="/js/config.js"></script>
    
    <!-- d3 library placed at the bottom for better performance -->
    <!-- DISABLED  <script src="/js/include/d3.v3.min.js"></script> -->
    <!-- DISABLED  <script src="/js/include/adv_charts/d3-chart-1.js"></script> -->
    <!-- DISABLED  <script src="/js/include/adv_charts/d3-chart-2.js"></script> -->

    <!-- Google Geo Chart -->
    <!-- DISABLED <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script> -->
    <!-- DISABLED <script type='text/javascript' src='https://www.google.com/jsapi'></script>-->
    <!-- DISABLED <script src="/js/include/adv_charts/geochart.js"></script> -->
     <script src="/js/jquery.form.js"></script>
    <script>
         $(document).ready(function(){	
                $('#photoUploadButton').on("click", function(){ 
                    $("#preview").html('');
                    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
                    $("#imageform").ajaxForm({
                        target: '#preview'
                    }).submit();
            });
        }); 
    </script>
    <!-- end scripts -->
  </body>
</html>
