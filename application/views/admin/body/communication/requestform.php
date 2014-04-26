<?php
defined('SYSPATH') or die('No direct script access.');
?>
<form id="request-form" name="request-form">
    <input type="hidden" id="price_range_id" name="price_range_id" />
<div class="left_request_header">
     <h5>Select a Fobi Word to target your message:</h5>
    <div class="input-prepend">
        <span class="add-on">Choose Keyword:</span>
        <input type="hidden" id="request-keyword" name="request-keyword"/>
    </div>
     <div class="request-hidden" id="request-hidden-1">
          <div class="btn-group" style="width:100px;float:left;">
                <a class="btn btn-primary medium" href="javascript:void(0);">Local</a>
                <a class="btn btn-primary medium dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="caret"></span></a>
                <ul class="dropdown-menu btn-small">
                        <li><a href="javascript:void(0);" class="localbutton" data-radius="1"> Within 1 mile</a></li>
                        <li><a href="javascript:void(0);" class="localbutton" data-radius="2"> Within 2 miles</a></li>
                        <li><a href="javascript:void(0);" class="localbutton" data-radius="20"> Within 20 miles</a></li>
                        <li><a href="javascript:void(0);" class="localbutton" data-radius="50"> Within 50 miles</a></li>
                        <li><a href="javascript:void(0);" class="localbutton" data-radius="100"> Within 100 miles</a></li>
                        <li><a href="javascript:void(0);"  class="localbutton" data-radius="0" id="cancel-button">Unlimited</a></li>
                </ul>
            </div>
         <div id="radiussearch" style="width:300px;float:left;text-align:center;padding:5px;border:1px solid #000;border-radius:4px;background:#ffc;margin:4px;display:none;"></div>
     </div>
     <br />
     <br class='clear'/>
     <div class="request-hidden" id="request-hidden-2">
        <h5>You may also Choose Recipients:</h5>
       <div class="input-prepend">
           <span class="add-on">To:</span>
           <input type="hidden" id="request-send-to" name="request-send-to"/>
       </div>
     </div>
    
    <div class="input-prepend">
        <span class="add-on">Subject:</span>
        <input  id="request-subject" name="message-subject" type="text" placeholder="Type a Subject" style="width:400px;">
    </div>
</div>
<div class="right_request_header">
    Note:  This is a Fobi Request and is intended for broadcast of a request to multiple sponsors. If you wish to send a private message, use the "Compose Message" feature.
    <h5>Choose price range:</h5>
    <div class="btn-group well-small " data-toggle="buttons-checkbox">
      <button type="button" data-id="1" class="btn pricebtn">$0 - $100</button>
      <button type="button" data-id="2"  class="btn pricebtn">$101 - $300</button>
    </div>
    <div class="btn-price">
      <img src="images/e-price.jpg" width="300" height="45">	
    </div>
    <div class="btn-group well-small " data-toggle="buttons-checkbox">
      <button type="button" data-id="3"  class="btn pricebtn">$300 - $500</button>
      <button type="button" data-id="4"  class="btn pricebtn">$500 +</button>
    </div>
</div>
    <br class="clear"/>

<textarea id="request-body" name='message-body' placeholder="Enter text ..." style="width:95%;height: 180px;"></textarea>
<a href="javascript:void(0)" class="btn medium" id="save-notes-btn-js" >Save Message</a>
<a href="javascript:void(0)" class="btn medium btn-primary" id="post-request">Send Message</a>
</form>
	
