$(document).ready(function(){
    $("#home-mask").css("height",$(document).height()+"px");
    $("#home-live").css("height",($(window).height()-100)+"px");
    $("#home-live").css("width",($(document).width()-100)+"px");
    $("#home-preview-row").css("height",($("#home-live").height()-90)+"px");
    $("#home-search").click(function(){
        $("#home-live").fadeIn();
        $("#home-mask").fadeIn();
        loadPreviewProfiles();
    });
    $("#home-mask").click(function(){
        $("#home-mask").fadeOut();
        $(".mask-hide").fadeOut();
    });
     $(".photonav li").click(function(){
        var id=$(this).attr("id").replace("-nav","");
        $(".photopanel").css("display","none");
        $(".photonav li").css("background-position","-9000px -9000px");
        $("#"+id).fadeIn();
        $(this).css("background-position","0 0");  
    });
    $("#photobox-next").click(function(){
        nextPhoto();
    });
    $("#photobox-prev").click(function(){
        prevPhoto();
    });
    $("#bigmask").click(function(){
        $("#bigmask").fadeOut();
        $("#photobox").fadeOut();
    });
    $("#photobox-close").click(function(){
        $("#bigmask").fadeOut();
        $("#photobox").fadeOut();
    });
    
});
function loadPreviewProfiles(){
    $.ajax({
       url:"/data/previewprofiles",
       dataType:"json",
       success:function(data){
           var html="";
           $.each(data,function(idx,profile){
               html+="<a href='#' data-id='"+profile.id+"' class='home-preview-profile'>"+
                       profile.first_name_1+
                       "<br/>"+
                       profile.last_name_1+
                       "<br/>"+
                       profile.photo+
                       "</a>";
           });
           $("#home-preview-left-bar").html(html);
           $(".home-preview-profile").click(function(e){
        e.preventDefault();
        var id=$(this).attr("data-id");
        $.ajax({
           url:"/photo/gallery/"+id,
           dataType:"json",
           success:function(data){
                 $("#publicview").fadeIn();
                 showPublicImages(data);
           }
       });
    });
       }
    });
    
}
function showPublicImages(data){
    $(".photopanel").html("");
    $.each(data.photos,function(idx,photo){
        if(photo.category==="videophoto"){
          $("#"+ photo.category +"").append("<div class='videoframe' data-id='"+photo.id+"'>"+
                  photo.absolute_path+
                       "<span class='videolegend'>"+
                        "<h5>"+photo.title+"</h5>"+
                        photo.description+
                    "</span>"+
                  "<div>");
        }else{
          $("#"+ photo.category +"").append(
                  "<span class='photoframe' data-id='"+ photo.id+"'>"+
                  "<img class='photoholder' data-id='"+ photo.id+"'src='"+photo.url+"'/>"+
                    "<span class='photolegend'>"+
                        "<h5 class='phototitle'>"+photo.title+"</h5>"+
                        "<span class='photodescription'>"+photo.description+"</span>"+
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
    $(".photoframe").click(function(){
       var id=$(this).attr("data-id");
       var src=$(this).children("img").attr("src");
       var title=$(this).children(".photolegend").children(".phototitle").html();
       var description=$(this).children(".photolegend").children(".photodescription").html();
       $("#photobox-title").html(title);
       $("#photobox-photo").attr("data-myindex",$(this).index());
       $("#photobox-photo").attr("data-mycollection",$(this).parent().attr("id"));
       $("#photobox-description").html(description);
       $("#bigmask").fadeIn();
       $("#photobox").fadeIn();
       $("#photobox-photo").attr("src",src);
       var photoheight= $("#photobox").height();
       var photowidth= $("#photobox").width();
       var screenwidth=$(window).width();
       var screenheight=$(window).height();
       var phototop=((screenheight-photoheight)/2)-100;
       var photoleft=(screenwidth-photowidth)/2;
       $("#photobox").css("top",phototop+"px");
       $("#photobox").css("left",photoleft+"px");
    });
    $("#photobox-legend").click(function(){
        //alert($(this).css("height"));
        if($(this).css("height")=="50px")
            $(this).css("height","50%");
        else
            $(this).css("height","50px");
    });
    $("#photobox-legend").mouseout(function(){
            
    });

    
}
function nextPhoto(){
    $("#photobox").hide();
    var index=$("#photobox-photo").attr("data-myindex");
        var collection=$("#photobox-photo").attr("data-mycollection");
        var collectionSize=$("#"+collection).children(".photoframe").length;
        var nextIndex=parseInt(index)+1;
        if(nextIndex==collectionSize){
            nextIndex=0;
        }
        var newsrc=$("#"+collection).children().eq(nextIndex).children(".photoholder").attr("src");
        var newtitle=$("#"+collection).children().eq(nextIndex).children(".photolegend").children(".phototitle").html();
        var newdescription=$("#"+collection).children().eq(nextIndex).children(".photolegend").children(".photodescription").html();

        $("#photobox-photo").attr("src",newsrc);
        $("#photobox-photo").attr("data-myindex",nextIndex);
        $("#photobox-title").html(newtitle);
        $("#photobox-description").html(newdescription);
        var photoheight= $("#photobox").height();
       var photowidth= $("#photobox").width();
       var screenwidth=$(window).width();
       var screenheight=$(window).height();
       var phototop=((screenheight-photoheight)/2)-100;
       var photoleft=(screenwidth-photowidth)/2;
       $("#photobox").css("top",phototop+"px");
       $("#photobox").css("left",photoleft+"px");
       $("#photobox").fadeIn();
}
function prevPhoto(){
    $("#photobox").hide();
    var index=$("#photobox-photo").attr("data-myindex");
        var collection=$("#photobox-photo").attr("data-mycollection");
        var collectionSize=$("#"+collection).children(".photoframe").length;
        var nextIndex=parseInt(index)-1;
        if(nextIndex<0){
            nextIndex=collectionSize-1;
        }
        var newsrc=$("#"+collection).children().eq(nextIndex).children(".photoholder").attr("src");
        var newtitle=$("#"+collection).children().eq(nextIndex).children(".photolegend").children(".phototitle").html();
        var newdescription=$("#"+collection).children().eq(nextIndex).children(".photolegend").children(".photodescription").html();
        $("#photobox-photo").attr("src",newsrc);
        $("#photobox-photo").attr("data-myindex",nextIndex);
        $("#photobox-title").html(newtitle);
        $("#photobox-description").html(newdescription);
        var photoheight= $("#photobox").height();
       var photowidth= $("#photobox").width();
       var screenwidth=$(window).width();
       var screenheight=$(window).height();
       var phototop=((screenheight-photoheight)/2)-100;
       var photoleft=(screenwidth-photowidth)/2;
       $("#photobox").css("top",phototop+"px");
       $("#photobox").css("left",photoleft+"px");
       $("#photobox").fadeIn();
}


