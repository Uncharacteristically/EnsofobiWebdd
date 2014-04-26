<div id="page-content">
    <h1 id="page-header">Campaigns</h1>
    <button id="add-campaign" class="btn btn-small btn-primary" type="button"> <i class="icon-plus"></i> Add A Campaign</button>
    <div  id="campaignlist">
    </div>
    <div id="campaignform" class="maskhide">
        <div>
            <img src="/images/ensofobi2.png"/>
            <span class="editformtag">Campaigns</span>
            <br class="clear"/>
        </div>
        <div id="campaign_form_left">
            <input type="hidden" name="template_no" id="template_no"/>
            <input type="text" name="campaign_name" id="campaign_name" placeholder="Enter a Gampaign Name"/>
            <textarea name="campaign_name" id="campaign_name" placeholder="Enter a Gampaign Name"></textarea>
            <input type="text" name="campaign_start" id="campaign_start" placeholder="Enter a Start Date"/>
            <input type="text" name="campaign_end" id="campaign_end" placeholder="Enter an End Date"/>
            
            <div id="campaign_thumbnails"></div>
      


        </div>
        <div id="campaign_form_right">
            <div id="templates">
                <!-- 1 row * 1 col= 1 cell-->
                <div id="template_1" class="template">
                    <div id="t1_c1"></div>
                </div>
                <!-- 2 row * 1 col= 2 cell-->
                <div id="template_2" class="template">
                     <div id="t2_c1" class="c1"></div>
                     <div id="t2_c2" class="c2"></div>
                </div>
                <!-- 2 row * 2 col= 4 cell-->
                <div id="template_3" class="template">
                     <div id="t3_c1" class="c1"></div>
                     <div id="t3_c2" class="c2"></div>
                     <div id="t3_c3" class="c3"></div>
                     <div id="t3_c4" class="c4"></div>
                </div>
                <!-- 2 row * 2 col+ center= 5 cell-->
                <div id="template_4" class="template">
                     <div id="t4_c1" class="c1"></div>
                     <div id="t4_c2" class="c2"></div>
                     <div id="t4_c3" class="c3"></div>
                     <div id="t4_c4" class="c4"></div>
                     <div id="t4_c5" class="c5"></div>
                </div>
            </div>
            <div id="split_ed_left">
                <div id="template_editor">
                    <div class="t_edit_cell" id="t_edit_1">
                        <input type="hidden" name="image_1" id="image_1"/>      
                        <div class="celledit" contenteditable="true" name="text_1" id="text_1"></div>
                        <div class="keepout"></div>
                    </div>
                    <div class="t_edit_cell" id="t_edit_2">    
                        <input type="hidden" name="image_2" id="image_2"/>      
                        <div class="celledit" contenteditable="true" name="text_2" id="text_2"></div>  
                    </div>
                    <div class="t_edit_cell" id="t_edit_3">     
                        <input type="hidden" name="image_3" id="image_3"/>      
                        <div class="celledit" contenteditable="true" name="text_3" id="text_3"></div>  
                    </div>
                    <div class="t_edit_cell" id="t_edit_4">    
                        <input type="hidden" name="image_4" id="image_4"/>      
                        <div class="celledit" contenteditable="true" name="text_4" id="text_4"></div>  
                    </div>
                    <div class="t_edit_cell" id="t_edit_5">     
                        <input type="hidden" name="image_5" id="image_5"/>      
                        <div class="celledit" contenteditable="true" name="text_5" id="text_5"></div>  
                    </div>
                </div>
            </div>
            <div id="split_ed_right">
                <label for="bgcolor_1">BG Color #1</label>
                <input type="text" name="bgcolor_1" id="bgcolor_1"class="color"/>
                <label for="bgcolor_2">BG Color #2</label>
                <input type="text" name="bgcolor_2" id="bgcolor_2"class="color"/> 
                <label for="bgcolor_3">BG Color #3</label>
                <input type="text" name="bgcolor_3" id="bgcolor_3"class="color"/>
                <label for="bgcolor_4">BG Color #4</label>
                <input type="text" name="bgcolor_4" id="bgcolor_4"class="color"/>
                <label for="bgcolor_5">BG Color #5</label>
                <input type="text" name="bgcolor_5" id="bgcolor_5"class="color"/>  
            </div>
        </div>
    </div>
</div>		

        

