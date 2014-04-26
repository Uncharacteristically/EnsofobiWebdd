<?php
    $form=new Helper_Form();
    $form->profileType=$fields["profile_type_id"];
    $user_form=$form->renderForm($fields,"Save");
?>
<?php echo View::factory("layout/documentHeaderAdmin");?>
<body>
<div class="height-wrapper">
    <?php echo View::factory("layout/headerNavigationAdmin");?>
    <div id="main" role="main" class="container-fluid">
    <div class="contained">
        <!-- left aside -->
        <?php echo View::factory("layout/leftAsideAdmin")
                ->bind("avatar",$fields["avatar"])
                ->bind("first_name",$fields["first_name_1"]);
        ?>
        <!-- main content -->
        <div id="page-content">
            <h5>User Workspace</h5>
            <div id="workspace">
                <div class="workspaceNode" id="workspace-1" style="display:block;"><?php echo View::factory("components/fobiFeed")->bind("fields",$fields);?></div>
                <div class="workspaceNode" id="workspace-2"><?php echo View::factory("forms/myprofileinfo")->bind("myProfile",$fields)->bind("user_form",$user_form);?></div>
                <div class="workspaceNode" id="workspace-3"><?php echo View::factory("components/myphotomanager")->bind("fields",$fields);?></div>
                <div class="workspaceNode" id="workspace-4"><?php echo View::factory("components/myinbox")->bind("fields",$fields);?></div>
                <div class="workspaceNode" id="workspace-5"></div>
            </div>
        </div>
        <?php echo View::factory("layout/rightAsideAdmin");?>
    </div>
    
</div>
</div>
<div class="push"></div>
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
<div id="bigmask"></div>
<div id="publicprofile" class="maskhide"><div id="ppheader"><img src="/images/ensofobi2.png"/><h4>My Public Profile</h4></div><a href="#" id="maskclose">X</a></div>

<?php echo View::factory("layout/documentFooterAdmin");