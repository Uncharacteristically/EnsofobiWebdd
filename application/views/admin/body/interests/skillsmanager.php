<?php defined('SYSPATH') or die('No direct script access.');?>
<div>
    <h4>Fobi - Words</h4>
    <button id="add-interests" class="btn btn-small btn-primary" type="button"> <i class="icon-plus"></i> Add Words</button>
    <div id="interest-manager">
        <div class="interest-manager-panel" id="interest-manager-left">
        <h4>Search</h4>
                    <input type="text" id="keyword-search"/>
                    <h4>Search Results</h4>
                    <div id="search-keywords"></div>
                    <h4>Save / Edit</h4>
                    <form id="new-keyword" name="new-keyword">
                        <input type="hidden" id="keyword-id" name="keyword-id" value='0'/>
                        <input type="text" name="keyword-create" id="keyword-create"/>
                        <button id='keyword-save'>Save</button>
                    </form>
                    
        </div>
        <div class="interest-manager-panel" id="interest-manager-right">
            <h4>Select:</h4>
            <div class="keyword-selector" id="keyword-accept"></div>
        </div>
          <br style="clear:both;"/>          
    </div>
    <hr style="clear:both;"/>
    <h4>Your Words:</h4>
    <p class="active well-lg" id="interest-list">
     </p>
</div>
<hr/>
