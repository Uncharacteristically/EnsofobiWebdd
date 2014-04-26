<div class="inbox-body-content" id="inbox-loading-panel-js">
<h1 class="message-title" id="view-message-subject"></h1>
<h3 class="message-from">[From]<span  id="view-message-from"></span></h3>
<h3 class="message-from">[To]<span  id="view-message-to"></span></h3>
<input type="hidden" id="view-message-id"/>
    <div class="message-container">
        <div class="message-control-panel">
            <div class="btn-group">
                <a class="btn btn-primary medium" href="javascript:void(0);"><i class="icon-reply"></i>Actions</a>
                <a class="btn btn-primary medium dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="caret"></span></a>
                <ul class="dropdown-menu btn-small">
                        <li><a href="javascript:void(0);" class="outbutton" id="reply-button"><i class="cus-arrow-undo"></i> Reply</a></li>
                        <li><a href="javascript:void(0);" class="outbutton" id="reply-button-all"><i class="cus-arrow-undo"></i> Reply All</a></li>
                        <li><a href="javascript:void(0);" id="archive-button"><i class="cus-envelope"></i> Save/Archive</a></li>
                        <li><a href="javascript:void(0);" id="forward-button"><i class=" cus-arrow-right"></i> Forward</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0);" id="cancel-button"><i class="cus-cancel"></i> Cancel</a></li>
                </ul>
            </div>
            <a href="javascript:void(0)" id='delete-mail' class="btn btn-danger medium pull-right"><i class="icon-trash"></i> Delete Message</a>
        </div>
        <div class="message-body" id="view-message-body">
        </div>
    </div>
<div  id="reply-content">
            <h4>Reply To:</h4>
            <h4 id="reply-to-recipients"></h4>
            <h4 id="reply-to-recipients-all"></h4>
        <input type="hidden" id="reply-all-recipients" value=""/>
        <textarea id="reply-body" name='reply-body' placeholder="Enter text ..." style="width:550px;margin:0 30px;height:100px;"></textarea>
        <a href="javascript:void(0)" class="btn medium btn-primary" id="send-reply">Send Message</a>
    </div>
</div>
<div id="thread"></div>