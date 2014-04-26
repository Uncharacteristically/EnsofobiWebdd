$(document).ready(function(){
    loadServiceThumbnails();
    loadServiceList(true,"servicelist");   
    $('#service_photo_mockup').droppable({
            drop:function(event,ui){
                var photoid=ui.draggable.attr('data-id');
                var service_photo_val=$("#service_photo").val().trim();
                var photos=service_photo_val.split(",");
                photos.push(photoid);
                var service_photo=photos.join(",");
                $("#service_photo").val(service_photo);
                $.ajax({
                    url:"/photo/detail?photoId="+photoid,
                    dataType:"json",
                    success:function(data){
                        var ref="<div class='service_photo' style='background:url(/uploads/"+data.user_id+"/"+data.photo_name+");'/></div>";
                        $("#service_photo_mockup").append(ref);
                        
                    }
                });
            }
     });
     $("#service_name").keyup(function(){
         $("#service_name_mockup").html($(this).val());
     });
     $("#delete-service").click(function(e){
         e.preventDefault();
         var id=$("#service_id").val();
         $.ajax({
             url:"/services/delete/?id="+id,
             dataType:"json",
             success:function(data){
                 listServices(data,true,"servicelist");
                 $("#serviceform").fadeOut();
                 $("#bigmask").fadeOut();
             }
         })
     });
     $("#service_description").keyup(function(){
         $("#service_description_mockup").html($(this).val());
     });
     $("#add-services").click(function(){
         $("#service_name").val("");
         $("#service_id").val("");
         $("#service_description").val("");
         $("#service_photo").val("");
         $("#service_keyword").val("");
         $("#service_photo_mockup").html("");   
         $("#delete-service").hide();
         $("#serviceform").fadeIn();
         $("#bigmask").fadeIn();
         loadServiceEditor("");
     });
     $("#cancel-service").click(function(e){
         e.preventDefault();
         $("#serviceform").fadeOut();
         $("#bigmask").fadeOut();
     });
     $("#save-service").click(function(e){
         e.preventDefault();
         var data=$("#service-form").serialize();
         var service_keyword=$("#service_keyword").select2("val");
         
         $.ajax({
             url:"/services/save?service_keyword="+service_keyword,
             data:data,
             dataType:"json",
             success:function(data){
                 listServices(data,true,"servicelist");
             }
         })
         $("#serviceform").fadeOut();
         $("#bigmask").fadeOut();
     });
     
});
function loadServiceThumbnails(){
    $.ajax({
           url:"/photo/list/",
           dataType:"json",
           success:function(data){
               showServiceThumbnails(data); 
           }
    });
}
function showServiceThumbnails(data){
    $.each(data.photos,function(idx,photo){
        if(photo.category!=="videophoto"){
          $("#service_thumbnails").append(
                  "<span class='tn_frame'>"+
                    "<img class='service_tn' data-id='"+ photo.id+"'src='"+photo.url+"'/>"+
                  "</span>"
                  );
        }
        $(".service_tn").draggable({
           revert:true
        });
    });
}

        
