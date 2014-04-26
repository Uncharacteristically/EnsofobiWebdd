$(document).ready(function(){
    $("#video-edit").click(function(){
         $("#bigmask").fadeIn();
         $("#videoform").fadeIn();
         $("#video_id").val(0);
    });
    $("#video-edit-cancel").click(function(e){
        e.preventDefault();
        $("#video_code").val("");
        $("#video_id").val("");
         $("#bigmask").fadeOut();
         $("#videoform").fadeOut();
    });
    $("#video-edit-save").click(function(e){
        e.preventDefault();
        var formData=$("#video-form").serialize();
        $.ajax({
           url:"/photo/video/",
           data: formData,
           dataType:"json",
           success:function(data){
               showImages(data);
           }
        });
        $("#video_code").val("");
        $("#video_id").val("");
        $("#bigmask").fadeOut();
        $("#videoform").fadeOut();
    });
    $("#photo-edit-cancel").click(function(e){
        e.preventDefault();
        $("#photo_title").val("");
        $("#photo_description").val("");
        $("#photo_id").val("");
        $("#photo_profile").attr("checked",false);
        $("#photo_logo").attr("checked",false);
        $("#photoeditor").fadeOut();
        $("#bigmask").fadeOut();
    });
    $("#photo-edit-save").click(function(e){
        e.preventDefault();
        var formData=$("#photo-edit").serialize();
        $.ajax({
            url:"/photo/save/",
            data:formData,
            dataType:"json",
            success:function(data){
                showImages(data);
            }
        });
        $("#photo_title").val("");
        $("#photo_description").val("");
        $("#photo_id").val("");
        $("#photo_profile").attr("checked",false);
        $("#photo_logo").attr("checked",false);
        $("#photoeditor").fadeOut();
        $("#bigmask").fadeOut();
    });
    $(".photonav li").droppable({
            drop:function(event,ui){
                var photoname=ui.draggable.attr("data-id");
                var dragclass=ui.draggable.attr("data-class");
                console.log(dragclass);
                var foldername=$(this).attr("id");
                if(dragclass=="video"){
                    if(foldername!="trashphoto-nav"){
                        alert("you cannot reclassify videos");
                        return false;
                    }
                }else{
                    if(foldername==="videophoto-nav"){
                        alert("you cannot add a photo to the video folder");
                        return false;
                    }
                }
                $.ajax({
                    url:"/photo/categorize?photo="+photoname+"&folder="+foldername,
                    dataType:"json",
                    success:function(data){
                        showImages(data);
                    }
                });
            }
        });
        $('#photoimg').on('change', function(){
        var A=$("#imageloadstatus");
        var B=$("#imageloadbutton");

        $("#imageform").ajaxForm({target: '#preview', 
        beforeSubmit:function(){
            A.show();
            B.hide();
        }, 
        success:function(){
            A.hide();
            B.show();
            loadImages();
        }, 
        error:function(){
            A.hide();
            B.show();
        } }).submit();
    });
    $(".photonav li").click(function(){
        var id=$(this).attr("id").replace("-nav","");
        $(".photopanel").css("display","none");
        $(".photonav li").css("background-position","-9000px -9000px");
        $("#"+id).fadeIn();
        $(this).css("background-position","0 0");  
    });
    loadImages();
});
function loadImages(){
    $.ajax({
           url:"/photo/list/",
           dataType:"json",
           success:function(data){
               showImages(data);
               
           }
    });
}
function showImages(data){
    $(".photopanel").html("");
    $.each(data.photos,function(idx,photo){
        if(photo.category==="videophoto"){
          $("#"+ photo.category +"").append("<div class='videoframe'>"+
                  photo.absolute_path+
                  "<img class='video-drag-hand' data-class='video' data-id='"+photo.id+"'src='/images/icons/cursor_drag_hand.png'>"+
                  "<img class='videoedit' data-id='"+photo.id+"'src='/images/icons/pencil-icon.png'>"+
                    "<span class='videolegend'>"+
                        "<h5>"+photo.title+"</h5>"+
                        photo.description+
                    "</span>"+
                  "<div>");
        }else{
          $("#"+ photo.category +"").append(
                  "<span class='photoframe'>"+
                  "<img class='drag-hand' data-clss='photo' data-id='"+photo.id+"'src='/images/icons/cursor_drag_hand.png'>"+
                  "<img class='photoholder' data-id='"+ photo.id+"'src='"+photo.url+"'/>"+
                  "<img class='photoedit' data-id='"+photo.id+"'src='/images/icons/pencil-icon.png'>"+
                    "<span class='photolegend'>"+
                        "<h5>"+photo.title+"</h5>"+
                        photo.description+
                    "</span>"+
                  "</span>"
                  );
        }
    });
    $(".cat-total").html("");
    $.each(data.counts,function(idx,category){
        $("#"+category.category+"-total").html(category.total);
    });
    if(data.showphotos.profile !=""){
        $("#profilePhotoSpan").css("background-image","url('"+data.showphotos.profile+"')");
    }
    $(".drag-hand").draggable({
        revert:"invalid",
        containment:"document",
        zIndex:10000,
        appendTo: "body"
    });
    $(".video-drag-hand").draggable({
          revert: "invalid",
          containment:"document",
          zIndex:10000,
          appendTo: "body"
    });
    $(".photoedit").click(function(){
        $("#bigmask").fadeIn();
        $("#photoeditor").fadeIn();
        var id=$(this).attr("data-id");
        $.ajax({
            url:"/photo/detail/?photoId="+id,
            dataType:"json",
            success: function(data){
                $("#photo_title").val(data.title);
                $("#photo_id").val(id);
                $("#photo_description").val(data.description);
            }
        });
    });
    $(".videoedit").click(function(){
        $("#bigmask").fadeIn();
        $("#videoform").fadeIn();
        var id=$(this).attr("data-id");
        $.ajax({
            url:"/photo/detail/?photoId="+id,
            dataType:"json",
            success: function(data){
                $("#video_title").val(data.title);
                $("#video_id").val(id);
                $("#video_description").val(data.description);
                $("#video_code").val(data.absolute_path);
            }
        });
    });
}
        
