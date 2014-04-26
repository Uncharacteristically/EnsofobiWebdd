<?php
defined('SYSPATH') or die('No direct script access.');
?>
<div id="page-content">
    <h1 id="page-header">Keyword Administration (Super-User Only)</h1>	
    <div class="fluid-container">
        <section id="widget-grid" class="">
            <div class="row-fluid">
                <div class="span6">
                    <h4>New Keywords</h4>
                    <div id="new-keywords"></div>
                    <h4>Good Keywords</h4>
                    <div id="good-keywords"></div>
                    <h4>Bad Keywords</h4>
                     <div id="bad-keywords"></div>
                </div>
                <div class="span4">
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
                    <h4>Merge Search</h4>
                    <input type="text" id="merge-search"/>
                    <h4>Merge Search Results</h4>
                    <div id="merge-keywords"></div>
                </div>
            </div>
            <div class="row-fluid">
                
            </div>
            <div class="row-fluid">
                
            </div>
            <div class="row-fluid">
                
            </div>
            
        </section>
    </div>		
</div>

