<?php
defined('SYSPATH') or die('No direct script access.');
?>
<h4>Send Message</h4>
<form name="message-form">
<div class="input-prepend">
    <span class="add-on">To:</span>
    <input type="hidden" id="message-send-to" name="message-send-to" style="width:400px;"/>
</div>
<br class="clear"/>
<div class="input-prepend">
    <span class="add-on">Subject:</span>
    <input  id="message-subject" name="message-subject" type="text" placeholder="Type a Subject" style="width:400px;">
</div>
<textarea id="message-body" name='message-body' placeholder="Enter text ..." style="width: 100%; height: 200px;"></textarea>
<a href="javascript:void(0)" class="btn medium" id="save-notes-btn-js" >Save Message</a>
<a href="javascript:void(0)" class="btn medium btn-primary" id="post-message">Send Message</a>
</form>