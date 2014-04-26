$(document).ready(function(){
    loadFeed();
    $("#home-search").click(function(){
        alert("click");
        $("#home-live").fadeIn();
    });
    $("#post_feed").click(function(e){
        e.preventDefault();
         var data=$("#feed_post").serialize();
        $.ajax({
           url:"/data/feedpost?" + data,
           dataType:"json",
           success:function(data){
               showFeed(data);
               $("#feed").html(html);
               $("#post_content").val("");
            }
         });
    });
    $("#post_reply").click(function(e){
        e.preventDefault();
         var data=$("#reply_post").serialize();
        $.ajax({
           url:"/data/feedpost?" + data,
           dataType:"json",
           success:function(data){
               showFeed(data);
               $("#reply_content").val("");
               $("#reply_post_id").val("");
               $("#parent_id").val("");
               $("#reply-form").fadeOut();
               $("#bigmask").fadeOut();
            }
         });
    });
    $("#save_profile").click(function(e){
        e.preventDefault();
        var formData=$("#profileInfoForm").serialize();
            $.ajax({
                url:"/data/profile/?"+formData,
                success:function(data){
                   $("#firstNameSpan").html(data);
                   $(".workspaceNode").hide();
                    $("#workspace-1").fadeIn();
                },
                error:function(e){
                    alert("Checkbox error");
                }
            });
    });
    $("#reply-cancel").click(function(e){
        e.preventDefault();
        $("#reply_content").val("");
        $("#reply_post_id").val("");
        $("#reply-form").fadeOut();
        $("#bigmask").fadeOut();
        
    });
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
    $(".reply-save").click(function(e){
        e.preventDefault();
        var postid=$(this).attr("data-post-id");
        var reply=$("#reply-"+postid);
    });
    $("#profilelink").click(function(e){
        $(".workspaceNode").hide();
        $("#workspace-2").fadeIn();
    });
    $("#close_profile").click(function(e){
        e.preventDefault();
        $(".workspaceNode").hide();
        $("#workspace-1").fadeIn();
    });
    $("#photoeditorlink").click(function(e){
        $(".workspaceNode").hide();
        $("#workspace-3").fadeIn();
    });
    $("#requestlink").click(function(e){
        $(".workspaceNode").hide();
        $("#workspace-4").fadeIn();
    });
    $("#publiclink").click(function(e){
        $("#bigmask").fadeIn();
        $("#publicprofile").css("height",($(window).height()-100)+"px");
        $("#publicprofile").css("width",($(window).width()-100)+"px");
        $("#publicprofile").slideDown();
    });
    $("#bigmask").click(function(e){
        $(".maskhide").slideUp();
        $("#bigmask").fadeOut();
    });
    $("#maskclose").click(function(e){
        $("#publicprofile").slideUp();
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
//=============================
function loadFeed(){
    var userId=$("#post_author_id").val();
    $.ajax({
           url:"/data/loadposts?userId=" + userId,
           dataType:"json",
           success:function(data){
               showFeed(data);
           }
    });
}
function loadImages(){
    var userId=$("#post_author_id").val();
    $.ajax({
           url:"/photo/list?userId=" + userId,
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
                  "<img class='videoedit' data-id='"+photo.id+"'src='/images/icons/pencil.png'>"+
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
                  "<img class='photoedit' data-id='"+photo.id+"'src='/images/icons/pencil.png'>"+
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
        $("#profilePhotoSpan").html("<img src='"+data.showphotos.profile+"' height='75'/>");
    }
    $(".drag-hand").draggable({
        revert:true,
        containment:"document",
        zIndex:10000,
        appendTo: "body"
    });
    $(".video-drag-hand").draggable({
          revert:true,
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
}//==============================

function  showFeed(data){
    var html=recurseTree(data);
    $("#feed").html(html);
    $(".post-reply").click(function(e){
        e.preventDefault();
        var postid=$(this).attr("id").replace("reply-to-","");
        $("#reply_post_id").val(postid);
        var top=$(this).offset().top;
        var left=$(this).offset().left;
        $("#reply-form").css("top",top-150+"px");
        $("#reply-form").css("left",left+"px");
        $("#reply-form").fadeIn();
        $("#bigmask").fadeIn();
    });
}
//===============================
function recurseTree(branch){
    var html="<ul>";
    $.each(branch,function(idx,node){
        html+="<li id='post="+node.id+"'>"+
                "<span class='post'>"+
                "<span class='post-author'>"+
                    "<span class='post-photo'>"+node.photo+"</span>"+
                    "<span class='post-name'>"+node.first_name_1+"</span>"+
                "</span>"+
                "<span class='post-body'>"+
                    "<span class='post-date'>"+node.post_datetime+"</span>"+
                    
                    "<span class='post-content'>"+node.post_content+
                       
                    "</span>"+
                     "<a href='#' class='post-reply' id='reply-to-"+node.id+"'><img src='/images/icons/pencil.png'/></a>"+
                 "</span>"+
                
                "<br class='clear'>"+
                "</span>";
        if(node.children.length>0){
            html+=recurseTree(node.children);
        }
        html+="</li>";
    });
    html+="</ul>";
    return html;
} 

