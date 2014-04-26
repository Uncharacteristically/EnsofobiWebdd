<?php
echo <<<EOT
<h5>Fobi Feed</h5>
<div id="feed_form">
    <form id="feed_post">
    <input type="hidden" name="post_author_id" id="post_author_id" value="{$fields["id"]}"/>
    <input type="hidden" name="parent_id" id="parent_id" value="0"/>
    <textarea name="post_content" id="post_content"></textarea>
    <button onclick="uploadToFeed();" class="btn"><i class="icon-folder-open">Upload</i></button>
    <button id="post_feed"  class="btn btn-primary">Post</button>
    </form>
</div>
<div id="reply-form" class="maskhide">
    <form id="reply_post">
    <input type="hidden" name="parent_id" id="reply_post_id" value=""/>
    <input type="hidden" name="post_author_id" id="reply_author_id" value="{$fields["id"]}"/>
    <textarea name="post_content" id="reply_content"></textarea>
    <button id="reply-cancel" class="btn">Cancel</button>
    <button id="post_reply"  class="btn btn-primary">Comment</button>
    </form>
</div>
<div id="feed">
</div>    .
EOT;
?>


