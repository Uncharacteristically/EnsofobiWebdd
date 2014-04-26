<div id="page-content">
    <h1 id="page-header">Coupons</h1>
    <button id="add-coupons" class="btn btn-small btn-primary" type="button"> <i class="icon-plus"></i> Add A Coupon</button>
    <div  id="couponlist">
    </div>
    <div id="couponform" class="maskhide">
        <div id="couponformleft">
            <form id="coupon-form">
                <input type="hidden" name="coupon_id" id="coupon_id"/>
                <input type="text" name="coupon_start" id="coupon_start" placeholder="Start Date"/>
                <input type="text" name="coupon_end" id="coupon_end" placeholder="End Date"/>
                <input type="text" name="coupon_name" id="coupon_name" placeholder="Name"/>
                <textarea name="coupon_description" id="coupon_description" placeholder="Description"></textarea>
                <input type="hidden" name="coupon_photo" id="coupon_photo"/><br/>
                <button class="btn btn-default" id="save-coupon">Save</button>
                <button class="btn btn-default" id="cancel-coupon">Cancel</button>
                <button class="btn btn-default" id="delete-coupon">Delete</button>
            </form>
            <br/><br/>
            <ul id="coupon_mockup">
            <li class="coupon">
                <div class="logoholder" id="coupon_photo_mockup"></div>
                <div class="couponbrand" id="coupon_brand_mockup"><a href="#"><?php echo $profile["company_name"]; ?></a></div>
                
                <div class="savings">
                    <p id="coupon_name_mockup"></p>
                </div>
                <div class="coupondetails" id="coupon_description_mockup"></div>
            </li>
            </ul>
        </div>
        <div id="couponformright">
            <div id="coupon_thumbnails">
            </div>
        </div>
        
        
    </div>
</div>		
