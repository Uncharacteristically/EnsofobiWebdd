<?php
defined('SYSPATH') or die('No direct script access.');
?>
<div class="inbox-body-content" id="inbox-loading-panel-js">
    <div id="messageview" class="inboxview">
        <?php echo View::factory("admin/body/communication/inboxcontent");?>
    </div>
    <div id="requestview" class="inboxview">
        <?php echo View::factory("admin/body/communication/requestcontent");?>
    </div>
    <div id="requestform" class="inboxview">
        <h4>Send Request</h4>
        <form name="request-form">
            <?php echo View::factory("admin/body/communication/requestform");?>
        </form>
    </div>
    <div id="messageform" class="inboxview" style="display:block;">
        <?php echo View::factory("admin/body/communication/messageform");?>
    </div>
</div>
