$(document).ready(function(){
    $("#coupon_start").datepicker();
    $("#coupon_end").datepicker();
    loadCouponThumbnails();
    loadCouponList();
    $("#coupon_photo_mockup").droppable({
            drop:function(event,ui){
                var photoid=ui.draggable.attr("data-id");
                $.ajax({
                    url:"/photo/detail?photoId="+photoid,
                    dataType:"json",
                    success:function(data){
                        var ref="url(/uploads/"+data.user_id+"/"+data.photo_name+")";
                        $("#coupon_photo_mockup").css("background-image",ref);
                        $("#coupon_photo").val(photoid);
                        
                    }
                });
            }
     });
     $("#coupon_name").keyup(function(){
         $("#coupon_name_mockup").html($(this).val());
     });
     $("#coupon_description").keyup(function(){
         $("#coupon_description_mockup").html($(this).val());
     });
     $("#add-coupons").click(function(){
         $("#coupon_name").val("");
         $("#coupon_id").val("");
         $("#coupon_name_mockup").html("");
         $("#coupon_description").val("");
         $("#coupon_description_mockup").html("");
         $("#coupon_photo").val("");
         $("#coupon_start").val("");
         $("#coupon_end").val("");
         $("#coupon_photo_mockup").css("background-image","");
         $("#delete-coupon").hide();
         $("#couponform").fadeIn();
         $("#bigmask").fadeIn();
     });
     $("#cancel-coupon").click(function(e){
         e.preventDefault();
         $("#couponform").fadeOut();
         $("#bigmask").fadeOut();
     });
     $("#save-coupon").click(function(e){
         e.preventDefault();
         var data=$("#coupon-form").serialize();
         $.ajax({
             url:"/coupon/save",
             data:data,
             dataType:"json",
             success:function(data){
                 listCoupons(data);
             }
         })
         $("#couponform").fadeOut();
         $("#bigmask").fadeOut();
     });
     
});
function loadCouponThumbnails(){
    $.ajax({
           url:"/photo/list/",
           dataType:"json",
           success:function(data){
               showCouponThumbnails(data); 
           }
    });
}
function showCouponThumbnails(data){
    $.each(data.photos,function(idx,photo){
        if(photo.category!=="videophoto"){
          $("#coupon_thumbnails").append(
                  "<span class='tn_frame'>"+
                    "<img class='coupon_tn' data-id='"+ photo.id+"'src='"+photo.url+"'/>"+
                  "</span>"
                  );
        }
        $(".coupon_tn").draggable({
           revert:true
        });
    });
}
function loadCouponList(){
         $.ajax({
             url:"/coupon/list/",
             dataType:"json",
             success:function(data){
                 listCoupons(data);
             }
         });
}
function listCoupons(data){
    var html="<ul>";
    $.each(data,function(idx,coupon){
        
        html+="<li class='coupon'>"+
                "<div class='logoholder couponphotoholder' style='background-image:url(/uploads/"+coupon.user_id+"/"+coupon.photo_name+");'></div>"+
                "<div class='couponbrand'><a href='#'>"+coupon.company_name+"</a></div>"+
                "<div class='savings'>"+
                    "<p>"+coupon.coupon_name+"</p>"+
                "</div>"+
                "<div class='coupondetails' >"+coupon.coupon_description+"</div>"+
                "<div class='coupon_dates'>"+coupon.coupon_start+"-"+coupon.coupon_end+"</div>"+
                "<img class='couponedit' data-id='"+coupon.id+"'src='/images/icons/pencil-icon.png'>"+
            "</li>";
            
    });
    html+="</ul>";
    $("#couponlist").html(html);
    $(".couponedit").click(function(){
        var id=$(this).attr("data-id");
        $.ajax({
           url:"/coupon/detail/"+id,
           dataType:"json",
           success: function(data){
               $("#coupon_name").val(data.coupon_name);
               $("#coupon_id").val(data.id);
               $("#coupon_name_mockup").html(data.coupon_name);
               $("#coupon_description").val(data.coupon_description);
               $("#coupon_description_mockup").html(data.coupon_description);
               $("#coupon_photo").val(data.coupon_photo);
               $("#coupon_start").val(data.coupon_start);
               $("#coupon_end").val(data.coupon_end);
               var ref="url(/uploads/"+data.user_id+"/"+data.photo_name+")";
               $("#coupon_photo_mockup").css("background-image",ref);
               $("#delete-coupon").show();
               $("#couponform").fadeIn();
               $("#bigmask").fadeIn();
           }
        });
    });
}
        
