<?php

defined('SYSPATH') or die('No direct script access.');
?>
<div id="page-content">
<!-- page header -->
 <div class="header_icons"> <img src="../../../../images/communicationadmin.jpg"> 			</div>
<h1 id="page-header">Communications</h1>	
<div class="fluid-container">
<div class="row-fluid">
    <article class="span12">
        <div class="jarviswidget">
            <div class="inner-spacer"> 
                <div class="inbox-body" id="inbox-body-js">
                     <div class="inbox-control-panel">
                        <div class="interestbutton">
                        <a href="fobiinterests_admin.html" class="btn medium btn-warning pull-right "><i class="icon-pencil"></i> Make Survey</a>
                        </div>
                        <a href="#" id='compose-request' class="btn medium btn-primary pull-right" data-toggle="modal"><i class="icon-pencil"></i> Compose Request</a>
                        <a href="#" id='compose-message' class="btn medium btn-success pull-right" data-toggle="modal"><i class="icon-pencil"></i> Compose Message</a>
                     </div>
                     <?php echo View::factory("admin/body/communication/inboxbody"); ?>
                </div>
                <div class="inbox-menu">
                <div class="inbox-control-panel">
                    <a href="#" id='refresh-inbox-menu' class="btn medium pull-right"><i class="icon-refresh"></i> Refresh</a>
                </div>
                <?php echo View::factory("admin/body/communication/newinboxmenu"); ?>

<!-- end SLIDING MENU -->
</div>


</div>
<!-- end content-->

<!-- end wrap div -->
</div>


<!-- end widget -->
</article>
</div>
</div>		
</div>
<!-- end main content -->
