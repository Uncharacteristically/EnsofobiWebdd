        <form id="profileInfoForm" class="mvcform">
            <input type="hidden" name="profileFormUserId" id="profileFormUserId" value="<?php echo $myProfile["user_id"];?>"/>
            <?php echo $user_form; ?>
            <div style="margin-left:200px;">
            <button class="btn" id="close_profile">Close</button>
            <button class="btn btn-primary" id="save_profile">Save changes</button>
            </div>
        </form>

