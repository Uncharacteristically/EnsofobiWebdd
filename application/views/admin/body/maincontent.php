<div id="page-content">
    <h1 id="page-header">Public Preview</h1>	
    <div class="alert adjusted alert-info">
        <button class="close" data-dismiss="alert">×</button>
	<i class="cus-exclamation"></i>
	<strong>Welcome to Ensofobi Admin</strong> Please don't forget to customize your account.
    </div>
    <div class="fluid-container">
        <section id="widget-grid" class="">
            <div class="row-fluid">
                <?php echo View::factory("admin/body/maincontent/marquee");?> 
            </div>
            <div class="row-fluid">
                <hr/>
            </div>
            <div class="row-fluid">
                <?php echo View::factory("admin/body/maincontent/feedarea")->bind("profile",$profile);?> 
                <?php echo View::factory("admin/body/maincontent/companyinfo");?> 
            </div>
            <div class="row-fluid">
                <?php echo View::factory("admin/body/maincontent/calendar");?>     
            </div>	
        </section>
    </div>		
</div>
