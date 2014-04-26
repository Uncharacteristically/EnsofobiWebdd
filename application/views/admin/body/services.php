<div id="page-content">
<div class="header_icons"> <img src="../../../../images/service_icon.jpg"> 			</div>
    <h1 id="page-header">Services</h1>
    <button id="add-services" class="btn btn-small btn-primary" type="button"> <i class="icon-plus"></i> Add A Service</button>
    <div  id="servicelist">
    </div>
    <div id="serviceform" class="maskhide">
        <img src="/images/ensofobi2.png"/>
        <span class="editformtag">Services</span>
        <br class="clear"/>
        <br class="clear"/>
        <div id="serviceformleft">
            <div class='accordion'>
                <div class='accordion-group'>
                    <form id="service-form">
                         <input type="hidden" name="service_id" id="service_id"/>
                         <input type="hidden" name="service_photo" id="service_photo"/>
                        <div class='accordion-heading'>
                        <div id="service-form-header" class="accordion-toggle">
                            <input type="text" name="service_name" id="service_name" placeholder="Enter Service Name"/>
                        </div>
                         </div>
                        <div class="logoholder" id="service_photo_mockup"></div>
                        <br class="clear"/>
                        <input type="hidden" name="service_keyword" id="service_keyword"/>
                        <br class="clear"/>
                        <textarea name="service_description" id="service_description" placeholder="Description"></textarea>
                        <br class="clear"/>
                        <button class="btn btn-default" id="save-service">Save</button>
                        <button class="btn btn-default" id="cancel-service">Cancel</button>
                        <button class="btn btn-default" id="delete-service">Delete</button>
                    </form>
                </div>
            </div>
        </div>
         <div id="serviceformright">
            <div id="service_thumbnails">
            </div><br class="clear"/>  
         </div>
    </div>
</div>		
