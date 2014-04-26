<?php
?>
<h4>Photo Manager:</h4>

<ul id="phototabs" class="photonav">
    <li id="uncategorizedphoto-nav" style="background-position:0 0;">
        <span class="tip"><strong>Uncategorized:</strong> Click here to view recently uploaded photos and upload new photos.</span>
        <img src="/images/uncategorizedphoto.png"/>
        <span class="cat-total" id="uncategorizedphoto-total"></span>
    </li>
    <li id="mainphoto-nav">
        <span class="tip"><strong>Main:</strong>Click here to view/edit main site photos.</span>
        <img src="/images/mainphotos.jpg"/>
        <span class="cat-total" id="mainphoto-total"></span>
    </li>
    <li id="servicephoto-nav">
        <span class="tip"><strong>Services:</strong>Click here to view/edit service photos.</span>
        <img src="/images/service.jpg"/>
        <span class="cat-total" id="servicephoto-total"></span>
    </li>
    <li id="merchphoto-nav">
        <span class="tip"><strong>Merchandise:</strong>Click here to view/edit merchandise photos.</span>
        <img src="/images/merchphotos.jpg"/>
        <span class="cat-total" id="merchphoto-total"></span>
    </li>
    <li id="videophoto-nav">
        <span class="tip"><strong>Video:</strong>Click here to reference youtube or vimeo videos.</span>
        <img src="/images/video.jpg"/>
        <span class="cat-total" id="videophoto-total"></span>
    </li>
     <li id="trashphoto-nav">
         <span class="tip"><strong>Trash:</strong>Drag Photos here to delete.</span>
         <img src="/images/trashphotos.jpg"/>
     </li>
   </ul>
    <br class="clear"/>
    <div class="photopanel" id="uncategorizedphoto" style="display:block;"></div>
    <div  class="photopanel" id="mainphoto"></div>
    <div  class="photopanel" id="servicephoto"></div>
    <div  class="photopanel" id="merchphoto"></div>
    <div  class="photopanel" id="videophoto"></div>
    
<div id="photoeditor" class="maskhide">
    <form id="photo-edit" >
    <input type="hidden" id="photo_id" name="photo_id" value=""/>
    <label for="photo_title">Title:</label>
    <input type="text" id="photo_title" name="photo_title" value=""/>
    <label for="photo_description">Description:</label>
    <textarea name="photo_description" id="photo_description"></textarea>
    <label for="photo_profile">Profile Pic:</label>
    <input type="checkbox" id="photo_profile" name="photo_profile"/>
    <label for="photo_logo">Logo Pic:</label>
    <input type="checkbox" id="photo_logo" id="photo_logo"/>
    <br class="clear"/>
    <button id="photo-edit-cancel" class="btn">Cancel</button>
    <button id="photo-edit-save"  class="btn btn-primary">Save</button>
    </form>
</div>
    <br class="clear"/>
<?php echo View::factory("components/newphotouploader")->bind("user_id",$fields["id"]);?>
<?php echo View::factory("components/videoform")->bind("user_id",$fields["id"]);?>

