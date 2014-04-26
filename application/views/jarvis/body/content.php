<div id="page-content">
					<!-- breadcrumb -->
					<!-- DISABLED 
					<ul class="breadcrumb">
						<li>
							<a href="javascript:void(0);"><i class="icon-off"></i> Dashboard</a><span class="divider">/</span>
						</li>
						<li>
							<a href="javascript:void(0);">Library</a><span class="divider">/</span>
						</li>
						<li class="active">
							Current Page
						</li>
					</ul>
					-->
					<!-- end breadcrumb -->
					
					<!-- page header -->
					<h1 id="page-header">Public Preview</h1>	

					<div class="alert adjusted alert-info">
						<button class="close" data-dismiss="alert">×</button>
						<i class="cus-exclamation"></i>
						<strong>Welcome to Ensofobi Admin</strong> Don't forget to customize your acount! 
					</div>
					
					<div class="fluid-container">
						
						
						
						<!-- widget grid -->
						<section id="widget-grid" class="">
							
							<!-- row-fluid -->
							<div class="row-fluid">
								<article class="span12">
									
									<div class="jarviswidget transparent" id="widget-id-0">
									    <header>
									        <h2>No Title</h2>                           
									    </header>
									    
									    <!-- widget div-->
									    <div>
									    	<!-- widget edit box -->
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
									        <!-- end widget edit box -->
            
									        <div class="inner-spacer"> 
									        	<!-- content goes here -->
									        	
									        	 <div class="col-lg-6">
                                                <div class="container">

      <div class="row">

        <div class="span6">
        <div class="logoarea well-large">
        <img src="images/tempspotlogo.jpg" width="220" height="120">			 		</div>
        </div>
           <div class="span4">
          	 <div class="scroller">
	 <script type="text/javascript">

/***********************************************
* Memory Scroller script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var memorywidth="300px" //scroller width
var memoryheight="15px" //scroller height
var memorybgcolor="#DEFDD9" //scroller background
var memorypadding="2px" //padding applied to the scroller. 0 for non.
var borderCSS="border: 0px solid black;" //Border CSS, applied to scroller to give border.

var memoryspeed=2 //Scroller speed (larger is faster 1-10)
var pauseit=1 //Pause scroller onMousever (0=no. 1=yes)?

var persistlastviewedmsg=1 //should scroller's position persist after users navigate away (1=yes, 0=no)?
var persistmsgbehavior="onload" //set to "onload" or "onclick".

//Specify the scroller's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var memorycontent='<nobr><span style="font: bold 11px Verdana"><a href="http://www.dynamicdrive.com/recommendit/">Ensofobi</a> News update: This site is being built still.</span></nobr>'


////NO NEED TO EDIT BELOW THIS LINE////////////
var combinedcssTable="width:"+(parseInt(memorywidth)+6)+"px;background-color:"+memorybgcolor+";padding:"+memorypadding+";"+borderCSS+";"
var combinedcss="width:"+memorywidth+";height:"+memoryheight+";"

var divonclick=(persistlastviewedmsg && persistmsgbehavior=="onclick")? 'onClick="savelastmsg()" ' : ''
memoryspeed=(document.all)? memoryspeed : Math.max(1, memoryspeed-1) //slow speed down by 1 for NS
var copyspeed=memoryspeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-10000px">'+memorycontent+'</span>')
var actualwidth=''
var memoryscroller

if (window.addEventListener)
window.addEventListener("load", populatescroller, false)
else if (window.attachEvent)
window.attachEvent("onload", populatescroller)
else if (document.all || document.getElementById)
window.onload=populatescroller

function populatescroller(){
memoryscroller=document.getElementById? document.getElementById("memoryscroller") : document.all.memoryscroller
memoryscroller.style.left=parseInt(memorywidth)+8+"px"
if (persistlastviewedmsg && get_cookie("lastscrollerpos")!="")
revivelastmsg()
memoryscroller.innerHTML=memorycontent
actualwidth=document.all? temp.offsetWidth : document.getElementById("temp").offsetWidth
lefttime=setInterval("scrollmarquee()",20)
}

function get_cookie(Name) {
var search = Name + "="
var returnvalue = ""
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) {
offset += search.length
end = document.cookie.indexOf(";", offset)
if (end == -1)
end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function savelastmsg(){
document.cookie="lastscrollerpos="+memoryscroller.style.left
}

function revivelastmsg(){
lastscrollerpos=parseInt(get_cookie("lastscrollerpos"))
memoryscroller.style.left=parseInt(lastscrollerpos)+"px"
}

if (persistlastviewedmsg && persistmsgbehavior=="onload")
window.onunload=savelastmsg

function scrollmarquee(){
if (parseInt(memoryscroller.style.left)>(actualwidth*(-1)+8))
memoryscroller.style.left=parseInt(memoryscroller.style.left)-copyspeed+"px"
else
memoryscroller.style.left=parseInt(memorywidth)+8+"px"
}

if (iedom){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0" style="'+combinedcssTable+'"><td>')
write('<div style="position:relative;overflow:hidden;'+combinedcss+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=memoryspeed">')
write('<div id="memoryscroller" style="position:absolute;left:0px;top:0px;" '+divonclick+'></div>')
write('</div>')
document.write('</td></table>')
}
}
</script>

        </div>
        </div>
        </div>
        
      <div class="row-fluid">
        <div class="span8 well-sm">
        
       <div class="input-append">
       <h5>Search the Network</h5>
  <input class="input-medium" id="appendedDropdownButton" type="text">
  <div class="btn-group">
    <button class="btn dropdown-toggle .btn-small" data-toggle="dropdown">
      Search
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Fobi-Business</a></li>
      <li><a href="#">Fobi-Artists</a></li>
      <li><a href="#">Fobi-NonProfits</a></li>
      
    </ul>
	

            
  </div>
  
        </div>
        </div>
        <div class="col-lg-10">
        <div class="span10 well-lg">
          <div class="marquee well-sm" id="mycrawler2">
 <a href="home_page.php"><img src="images/advertise.jpg"/></a> 
 <img src="images/advertise2.gif" /> 
 <img src="images/advertise3.jpg" /> 
 <img src="images/advertise4.jpg" />
</div>

<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler2',
	style: {
		'padding': '2px',
		'width': '800px',
		'height': '160px',
	
'color': '#fff',
'background-color': '#fff',
'font-family': 'sans-serif',
'margin': '0 auto'

	},
	inc: 3, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>
        </div>
        
        </div>

      </div><!-- /.row -->
      <hr>

      <div class="row-fluid">

        

        <div class="col-md-6 feed-area span6">
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
  <input class="input-large" id="appendedDropdownButton" type="text">
  <div class="btn-group">
    <button class="btn"><i class="icon-folder-open"></i>
      Upload
      
    </button>
    <button class="btn btn-primary" type="button">Post</button>
 
    <ul class="dropdown-menu">
      ...
    </ul>


            	</div>
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
						  <div class="mainfeedlinks"><a href="calendar_admin.html"><img src="images/eventsuploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a>
						  
						  </div>
						  
						
			  </div>
			  
  			          <div class="fobioption">
						  <div class="mainfeedlinks"><a href="indexadmin.html"><img src="images/newsuploadlink.jpg" alt="photo" width="90" height="15" border="0" /></a>
						  
						  </div>
						 
						
			  </div>

          </div> 
          <div class="fobiefeed2 well-sm">
          <div class="statusholder">
    	<div class="feedprofileholder">
        	<div id="profilepictureholder">
            <img src="images/picture1.jpg" width="55" height="55"> </div>
          <div id="profilenameholder">
            	<p>ABheath</p>
            
        </div>
    	
    </div>
	<div id="statusaream">
    	<div id="statusdatem">
        <p>9/12/2012</p>
        </div>
        <p>"This is a status that is writen by the user."</p>
        
    </div>
  </div>
    <div id="commentarea">
      <p><a href="#comment">Comment</a> </p>
    </div>
	
	
    <div id="statuscomment">
    	    	<div class="feedprofileholder">
        	<div id="profilepictureholder">
            <img src="images/picture1.jpg" width="45" height="45"> </div>
          <div id="profilenameholder">
            	<p>Ensofobi.com</p>
            
        </div>
    	
    </div>
	<div id="statusarea">
    	<div id="statusdate">
        <p>9/12/2012</p>
        </div>
        <p>"This is a comment that is writen by the user. You can even write enough for a second line Jose!"</p>
        
    </div>
    </div>
	
	
    <div id="commentarea">
      <p><a href="#comment">Comment</a> </p>
    </div>
    div class="statusholder">
      <div class="feedprofileholder">
        	<div id="profilepictureholder">
            <img src="images/picture1.jpg" width="55" height="55"> </div>
          <div id="profilenameholder">
            	<p>ABheath</p>
            
        </div>
    	
    </div>
	<div id="statusaream">
    	<div id="statusdatem">
        <p>9/12/2012</p>
        </div>
        <p>"This is a status that is writen by the user."</p>
        
    </div>
</div>
    <div id="commentarea">
      <p><a href="#comment">Comment</a> </p>
    </div>
	
		
	
	
    	<div id="statuscomment2">
    	    	<div class="feedprofileholder">
        	<div id="profilepictureholder">
            <img src="images/picture1.jpg" width="45" height="45"> </div>
          <div id="profilenameholder">
            	<p>Backcountry.com</p>
            
        </div>
    	
    </div>
	<div id="statusarea">
    	<div id="statusdate">
        <p>9/12/2012</p>
        </div>
        <p>&quot;This is a comment on a comment! I know its not the original design but this is better, ill explain later!&quot;</p>
        
    </div>

    </div>
	    <div id="commentarea">
      <p><a href="#comment">Comment</a> </p>
    </div>
    <div id="statuscomment">
    	    	<div class="feedprofileholder">
        	<div id="profilepictureholderc">
            <img src="images/picture1.jpg" width="45" height="45"> </div>
			<p>Backcountry.com</p>
          
    	
    </div>
	<div id="statusarea">
    	<div id="statusdate">
        <p>9/12/2012</p>
        </div>
        <p>"This is a question notice it says Awnser insted of comment, right?"</p>
        
    </div>
    </div>
	<div id="statuscomment">
    	    	<div class="feedprofileholder">
        	<div id="profilepictureholderc">
            <img src="images/picture1.jpg" width="45" height="45"> </div>
			<p>Backcountry.com</p>
          
    	
    </div>
	<div id="statusarea">
    	<div id="statusdate">
        <p>9/12/2012</p>
        </div>
        <p>"This is a question notice it says Awnser insted of comment, right?"</p>
        
    </div>
    </div>
	  
	
	  
    <div id="statuscomment">
    	    	<div class="feedprofileholder">
        	<div id="profilepictureholder">
            <img src="images/picture1.jpg" width="45" height="45"> </div>
          <div id="profilenameholder">
            	<p>Ensofobi.com</p>
            
        </div>
    	
    </div>
	<div id="statusarea">
    	<div id="statusdate">
        <p>9/12/2012</p>
        </div>
        <p>This is a link Im not sure anything really specific should be added.<a href="www.AHeathdesigns.com">www.AHeathdesigns.com</a></p>
        
    </div>
	</div>
	    <div id="commentarea">
      <p><a href="#comment">Comment</a> </p>
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
        	<p>Bacon ipsum dolor sit amet meatball bacon shoulder, pork loin strip steak capicola leberkas. Bacon short loin salami capicola. Short ribs short loin shoulder venison, brisket pig cow frankfurter meatloaf corned beef hamburger ball tip prosciutto shank. Bresaola jowl sirloin tri-tip kevin sausage salami. Pork loin kevin rump, ball tip boudin shoulder sirloin tail short loin salami beef chicken leberkas turducken pastrami. Pork rump tri-tip, pork loin pig leberkas bacon tenderloin salami. Beef pork chop bacon turducken tail flank boudin cow spare ribs frankfurter tenderloin.
            </p>
            <p>
Shank meatloaf beef ribs ground round, tenderloin shoulder filet mignon pig chuck pork chop kielbasa meatball tongue turducken. Turkey shank pig tenderloin, prosciutto short ribs pork loin kielbasa doner bresaola turducken pork belly strip steak. Short ribs ribeye flank pork boudin rump leberkas. Sausage doner meatball salami drumstick t-bone turkey. Shank turkey salami turducken beef sausage chuck corned beef.</p>
        </div>
       
        	 </div>
             
    			<div class="tab-pane" id="tab3">
                <h3>Services</h3>
           			<div class="accordion" id="accordion2">
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            <i class="icon-tag"> Service #1</i>
                          </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                          <div class="accordion-inner well-sm">
                          	<ul class="thumbnails">
                              <li>
                                <a href="#" class="thumbnail">
                                  <img class="img-responsive" src="http://placehold.it/120x120">
                                </a>
                              </li>
                              <li>
                                <a href="#" class="thumbnail">
                                  <img class="img-responsive" src="http://placehold.it/120x120">
                                </a>
                              </li>
                              <li>
                                <a href="#" class="thumbnail">
                                  <img class="img-responsive" src="http://placehold.it/120x120">
                                </a>
                              </li>
                              
                            </ul>
                            <h3>My deluxe service</h3>
                          		<p>
                                Bacon ipsum dolor sit amet rump t-bone jowl prosciutto. Doner hamburger pig cow shank. Jowl bresaola pancetta ball tip pork ham shoulder swine leberkas fatback cow bacon flank kevin. Bacon ground round meatball leberkas swine t-bone capicola. Tail leberkas ham, turkey bresaola pork chop jerky short ribs andouille jowl short loin hamburger shank. Meatloaf chicken short ribs brisket pork chop kevin ground round. Filet mignon short ribs rump pork chop beef ribs, ball tip ground round venison spare ribs kevin salami short loin meatloaf shoulder.
                                </p>
                                <p>
                                
                                </p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                           <i class="icon-tag"> Service #2</i>
                          </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                          <div class="accordion-inner well-sm">
                          <h3>Another great Service</h3>
                            <p>Filet mignon prosciutto pig, capicola kielbasa sirloin ham hamburger beef shankle venison kevin spare ribs. Strip steak andouille salami bresaola short loin t-bone fatback spare ribs. T-bone corned beef pastrami frankfurter capicola short ribs, kevin pork loin shoulder drumstick andouille cow tail shankle. Ham shank sirloin bresaola, ham hock flank biltong tail jowl fatback pork loin corned beef spare ribs. Drumstick meatloaf frankfurter strip steak, ball tip ribeye capicola ground round short ribs sausage bacon. Sausage tri-tip pastrami pork belly andouille venison short loin kevin, swine t-bone tenderloin shankle pancetta turkey.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                
               
                
                
      			</div>
  			</div>
		</div>
	</div>
</div>
		
        <div class="span3 ">
        	<div class="menu">
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
             
             <div class="employees well-sm">
          <p><img class="img-responsive img-polaroid" src="http://placehold.it/120x120"></p>
          <h4>Marketing Director</h4>
          <dl>
  <dt>Email:</dt>
  <dd>Someone@Comapany.com</dd>
   <dt>Phone:</dt>
  <dd>xxx-xxx-xxxx</dd>
</dl>
          
           <p><img class="img-responsive img-polaroid" src="http://placehold.it/120x120"></p>
          <h4>CEO</h4>
             <dl>
  <dt>Email:</dt>
  <dd>Someone@Comapany.com</dd>
   <dt>Phone:</dt>
  <dd>xxx-xxx-xxxx</dd>
</dl>
          </div>
        </div>
        

      </div>

      <div class="row">

        

      </div>

      <hr>

      <div class="row text-center">
       

      </div>

    </div><!-- /.container -->

 

   

      
                                                   </div>
                                                    </div>
									        													
									  
									        </div>
									        
									    </div>
									    <!-- end widget div -->
									</div>

								</article>
							</div>
							
							<!-- end row-fluid -->
							
							<!-- row-fluid -->
							
							<div class="row-fluid">

								<article class="span6">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-1">
									    <header>
									        <h2>Calendar</h2>                           
									    </header>
									    
									    <!-- widget div-->
									    <div>
									
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
												<div class="widget alert alert-info adjusted">
													<button class="close" data-dismiss="alert">×</button>
													<i class="cus-exclamation"></i>
													<strong>Helpful Hint:</strong> Did you know you can click on the <strong>Calendar Cell</strong> to add a new event? Try to add an event and see how easy it is!
												</div>
												<!-- calnedar container -->
									        	<div id="calendar-container">
										        	<div id="calendar-buttons">
														<div class="btn-group">
															<a href="javascript:void(0)" class="btn btn-small" id="btn-today">Today</a>
															<a href="javascript:void(0)" class="btn dropdown-toggle btn-small" data-toggle="dropdown"><span class="caret"></span></a>
															<ul class="dropdown-menu btn-small pull-right">
																<li>
																	<a href="javascript:void(0);" id="btn-month">Month</a>
																</li>
																<li>
																	<a href="javascript:void(0);" id="btn-agenda">Agenda</a>
																</li>
																<li>
																	<a href="javascript:void(0);" id="btn-day">Today</a>
																</li>
															</ul>
														</div>
														<div class="btn-group">
															<a href="javascript:void(0)" class="btn btn-small" id="btn-prev"><i class="icon-chevron-left"></i></a>
															<a href="javascript:void(0)" class="btn btn-small" id="btn-next"><i class="icon-chevron-right"></i></a>
														</div>
													</div>
										        	<div class="dt-header calender-spacer"></div>
										        	<div id="calendar"></div>
									        	</div>
									        	<!-- end calendar container -->
									        </div>
									        
									    </div>
									    <!-- end widget div -->
									</div>
									<!-- end widget -->
								</article>
										
								</div>
                                </div>
			
				<!-- aside right on high res -->
				<aside class="right">
					
					<!-- sparkline stats -->
					<ul class="mystats indented">
		                
		                <li>
		                    <h1 class="first"><span>Impressions:</span>145k+</h1>
		                    <div class="mychart" id="clicks" style="width:35px"></div>
		                </li>
		                <li>
		                    <h1><span>Sponsors:</span>15</h1>
		                    <div class="mychart" id="subscribe" style="width:35px"></div>
		                </li>
		                <li class="last">
		                    <h1><span>AD impressions:</span>945+</h1>
		                    <div class="mychart" id="support" style="width:35px"></div>
		                </li>
		            </ul>
		            <div class="divider"></div>
		            <!-- end sparkline stats -->

					<!-- aside progress bars -->
					<ul class="indented aside-progress-stats">
						<li>
							<!-- easy pie chart -->
							<div class="easypie">
								<div class="percentage" data-percent="68">
									<span>68</span>%
								</div>
								<div class="easypie-text">
									Profile Complete
								</div>
							</div>
							<!-- end easy pie chart -->
						</li>
		                <li>
		                    <strong>Profile</strong><strong class="pull-right">90%</strong>
		                    <div class="progress progress-danger slim"><div class="bar" data-percentage="90"></div></div>
		                </li>
		                <li>
		                    <strong>Images/ Videos added</strong><strong class="pull-right">66%</strong>
		                    <div class="progress progress-info slim"><div class="bar" data-percentage="66"></div></div>
		                </li>
		                <li>
		                    <strong>Memeber interaction</strong><strong class="pull-right">48%</strong>
		                    <div class="progress progress-info slim"><div class="bar" data-percentage="48"></div></div>
		                </li>
		                <li>
		                    <strong>Requests sent</strong><strong class="pull-right">33%</strong>
		                    <div class="progress progress-info slim"><div class="bar" data-percentage="33"></div></div>
		                </li>
		            </ul>
		            <div class="divider"></div>
		            <!-- end aside progress bars -->
					
					<!-- date picker -->
					<div id="datepicker"></div>
					<div class="divider"></div>
					<!-- end date picker -->
					
					<!-- aside buttons -->
					<div class="aside-buttons">
		            
		                <a href="promotions_admin.html" title="" class="btn btn-success">New Campaign</a>
		            
                            <a href="#" class="thumbnail">
                              <img src="http://placehold.it/160x120" alt="">
                             </a>
		            </div>
		            <div class="divider"></div>
		            <!-- end aside buttons -->
				</aside>
            
				
				<!-- end aside right -->
			</div>
			
	    </div><!--end fluid-container-->
		<div class="push"></div>
	</div>
	<!-- end .height wrapper -->
	
	<!-- footer -->
	
	<!-- if you like you can insert your footer here -->
	
	<!-- end footer -->
    
        <!---Modals--->
	
								<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit About Area</h3>
  </div>
  <div class="modal-body">
    <form>
  <fieldset>
    
   
    <input type="text" placeholder="Address">
    <span class="help-block">This is not mandatory but helps people locate your business!</span>
    
    <input type="text" placeholder="Phone">
    
   
<textarea rows="7" class="span6"name="about" placeholder="About">
</textarea>
    
  </fieldset>
</form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

