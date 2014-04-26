$(document).ready(function(){
    loadFeed();
    loadServiceList(false,"servicelist");
    $("#post_feed").click(function(e){
        e.preventDefault();
         var data=$("#feed_post").serialize();
        $.ajax({
           url:"/data/feedpost?" + data,
           dataType:"json",
           success:function(data){       
               showFeed(data);
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
    $("#reply-cancel").click(function(e){
        e.preventDefault();
        $("#reply_content").val("");
        $("#reply_post_id").val("");
        $("#reply-form").fadeOut();
        $("#bigmask").fadeOut();   
    });
    // end feed
});
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
                     "<a href='#' class='post-reply' id='reply-to-"+node.id+"'><img src='/images/icons/pencil-icon.png'/></a>"+
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
        
