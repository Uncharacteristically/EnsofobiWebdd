<div id='home-preview-header'>
    <img id="home-preview-logo" src="images/ensofobi2.png"/>
</div>
<div id="home-preview-row">
    <div id='home-preview-left-bar' class="home-preview-bar">
        
    </div>
    <div id='home-preview-center-bar' class="home-preview-bar">
        <div id="publicview">
            <div id="publicprofile"></div>
            <div id="publicfeed"><?php echo View::factory("components/publicfeed");?></div>
            <div id="publicphotos"><?php echo View::factory("components/publicphotos");?></div>
        </div>
    </div>
    <div id='home-preview-right-bar' class="home-preview-bar"></div>
</div>
<div id='home-preview-footer'></div>
<div id="bigmask"></div>
<div id="photobox">
    <img id="photobox-photo"  data-myindex="" data-mycollection="" src=""/>
    <div id="photobox-close">X</div>
    <div id="photobox-next">&rarr;</div>
    <div id="photobox-prev">&larr;</div>
    <div id="photobox-legend">
        <div id="photobox-title"></div>
        <div id="photobox-description"></div>
    </div>
</div>


