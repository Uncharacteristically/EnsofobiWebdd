<?php

defined('SYSPATH') or die('No direct script access.');
?>
<div id='preview'>
</div>
<form id="imageform" method="post" enctype="multipart/form-data" action='/photo/upload/' style="clear:both">
  <input type="hidden" name="photo_user_id" id="photo_user_id" value="<?php echo $user_id;?>"/>    
Upload image(s): 
<div id='imageloadstatus' style='display:none'><img src="/images/loader.gif" alt="Uploading...."/></div>
<div id='imageloadbutton'>
<input type="file" name="photos[]" id="photoimg" multiple="true" />
</div>
</form>


