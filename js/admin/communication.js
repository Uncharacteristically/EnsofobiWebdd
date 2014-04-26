var lat=null;
var lon=null;
$(document).ready(function(){
    navigator.geolocation.getCurrentPosition(onGeolocationSuccess, onGeolocationError);
    
    $(".pricebtn").click(function(){
       $(".pricebtn").removeClass("btn-success"); 
       $(this).addClass("btn-success"); 
       var id=$(this).attr("data-id");
       $("#price_range_id").val(id);
    });
    $("#compose-request").click(function(e){
        e.preventDefault();
        $(".inboxview").hide();
        $("#requestform").fadeIn();
    });
    $("#delete-mail").click(function(e){
        
    });
    $("#compose-message").click(function(){
        $(".inboxview").hide();
        $("#messageform").fadeIn();
    });
    $("#post-message").click(function(){
       var recipients=$("#message-send-to").select2("val");
       var subject=$("#message-subject").val();
       var body=$("#message-body").val();
       var url="/communication/savemessage/?recipients="+recipients+"&subject="+subject+"&body="+body;
       $.ajax({
           url:url,
           dataType:"json",
           success:function(data){
               populateMessages(data.messages);
               messageView(data.detail);
               $("#message-send-to").select2("val", "");
               $("#message-subject").val("");
               $("#message-body").val("");
           }
       });
    });
    $(".request-reply").click(function(){
       $("#reply-tree-window").fadeIn(); 
       $("#bigmask").fadeIn();
    });
    $("#post-request").click(function(){
       var recipients=$("#request-send-to").select2("val");
       var keywords=$("#request-keyword").select2("val");
       var subject=$("#request-subject").val();
       var price_range_id=$("#price_range_id").val();
       var body=$("#request-body").val();
       var url="/communication/saverequest/?recipients="+recipients+"&keywords="+keywords+"&subject="+subject+"&body="+body+"&price_range_id="+price_range_id;
       $.ajax({
           url:url,
           dataType:"json",
           success:function(data){
               populateMessages(data.messages);
               requestView(data.detail);
               $("#request-send-to").select2("val", "");
               $("#request-subject").val("");
               $("#request-body").val("");
               
           }
       });
    });
    $("#message-send-to").select2({
        width:"400px",
       placeholder:"Type to search Usernames..",
       multiple:true,
       minimumInputLength:2,
       ajax:{
           url:"/communication/usersearch",
           dataType:"json",
           data: function (term,page) {
                return {
                    q: term
                };
            },
           results:function(data,page){
               return {results: data };
           }
       }
    });
    $("#request-send-to").select2({
        width:"400px",
       placeholder:"Type to search Usernames..",
       multiple:true,
       minimumInputLength:2,
       ajax:{
           url:"/communication/usersearch",
           dataType:"json",
           data: function (term,page) {
                return {
                    q: term
                };
            },
           results:function(data,page){
               return {results: data };
           }
       }
    });
    $("#request-keyword").select2({
        width:"300px",
       placeholder:"Type to search Keywords..",
       multiple:true,
       minimumInputLength:2,
       ajax:{
           url:"/communication/keywordsearch",
           dataType:"json",
           data: function (term,page) {
                return {
                    q: term
                };
            },
           results:function(data,page){
               return {results: data };
           }
       }
    });
    $("#request-keyword").on("change",function(){
       $("#request-hidden-1").slideDown();
   });
   $(".localbutton").click(function(){
       var keywords=$("#request-keyword").val();
       var radius=$(this).attr("data-radius");
       $.ajax({
          url:"/communication/radiussearch/?radius="+radius+"&keywords="+keywords,
          dataType:"json",
          success:function(data){
              $("#radiussearch").html(data.response);
              $("#radiussearch").fadeIn();
          }
       });
       $("#request-hidden-2").slideDown();
   });
    $("#reply-button").click(function(e){
       $("#reply-all-recipients").val("0");
       $("#reply-to-recipients-all").hide();
       e.preventDefault();
       $("#reply-content").fadeIn();
    });
    $("#reply-button-all").click(function(e){
       $("#reply-all-recipients").val("1");
       $("#reply-to-recipients-all").show();
        e.preventDefault();
       $("#reply-content").fadeIn();
    });
    listMessages();
    $("div.slashc-sliding-menu").slashcSlidingMenu();
    $("#send-reply").click(function(){
        var replyid=$("#view-message-id").val();
        var replyall=$("#reply-all-recipients").val();
        var replybody=encodeURIComponent($("#reply-body").val());
        $.ajax({
            url:"/communication/reply?replyid="+replyid+"&replyall="+replyall+"&replybody="+replybody,
            dataType:"json",
            success:function(data){
                clearReply();
                messageView(data.detail);
                listMessages();
            }
        });
    });
    $("#refresh-inbox-menu").click(function(e){
        e.preventDefault();
        listMessages();
    });
    $("#cancel-button").click(function(){
        clearReply();
    });
});
function listMessages(){
     var url="/communication/listmessage/";
       $.ajax({
           url:url,
           dataType:"json",
           success:function(data){
               populateMessages(data);
           }
       });
}
function populateMessages(data){
    $.each(data.counts.subs,function(idx,count){
        $("#sub-category-badge-"+count.id).html(count.total);
    });
    $.each(data.counts.cats,function(idx,count){
        $("#category-badge-"+count.id).html(count.total);
    });
    $(".message-list").html("");
    var recipients="";
    if(data.received){
        $.each(data.received,function(recidx,item){
                $("#message-list-"+item.recipient_sub_category).append("<li><a href='javascript:void(0);' class='msg-view' data-id='"+item.id+"'><span class='tiny-sub'>Re:"+item.subject+"<span class='tiny-des'>"+item.body+"</span></span></a></li>");

         });
     }
     if(data.sent){
         $.each(data.sent,function(idx,item){
            recipients="";
            $.each(item.recipients,function(ridx,recipient){
               recipients+=recipient.name+" "; 
            });
            $("#message-list-"+item.sender_sub_category).append("<li><a href='javascript:void(0);' class='msg-view' data-id='"+item.id+"'><span class='tiny-sub'>Re:"+item.subject+"<span class='tiny-des'>"+item.body+"</span></span></a></li>");
        });
     }
     $(".msg-view").click(function(){
         var id=$(this).attr("data-id");
         showMessage(id);
     });
}
function showMessage(id){
    $.ajax({
       url:"/communication/showmessage/?id="+id,
       dataType:"json",
       success:function(data){   
           if(data.message.request==="1" && data.message.direction==="out"){
               requestView(data);
           }else{
               messageView(data);
           }
       }
    });
    clearReply();

}
function clearReply(){
   $("#reply-content").fadeOut();
   $("#reply-body").val("");
   $("#reply-all-recipients").val("");
}
function messageView(data){
    if(data.message.direction=="out"){
        $(".outbutton").hide();
    }else{
        $(".outbutton").show();
    }
    $("#view-message-subject").html(data.message.subject);
    $("#view-message-id").val(data.message.id);
    $("#view-message-from").html(data.message.first_name_1+" "+data.message.last_name_1);
    $("#reply-to-recipients").html(data.message.first_name_1+" "+data.message.last_name_1);
    var recipients=Array();
    var recipientshtml="<div id='participants'>";
    var replyrecipients=Array();
    $.each(data.participants,function(idx,participant){
        recipients.push(participant.name);
        if(participant.user!=data.message.myid){
            replyrecipients.push(participant.name);
        }
        recipientshtml+="<div class='participantprofile' data-id='"+participant.user+"' style='background:url(http://dev.ensofobi.com"+participant.photo_name+");'><ul class='thread'>";
        $.each(participant.thread,function(tidx,msg){
            recipientshtml+="<li>"+msg.sent_datetime+"</li>";
        });
        recipientshtml+="</ul><div class='participantname'>"+participant.name+"</div></div>";
    });
    recipientshtml+="</ul>";
    var recipientsout=recipients.join(",");
    var replyrecipientsout=replyrecipients.join(",");
    $("#view-message-to").html(recipientsout);
    $("#reply-to-recipients-all").html(replyrecipientsout);
    $("#view-message-body").html(data.message.body);

    $(".inboxview").hide();
    $("#messageview").fadeIn();

    $("#thread").html(recipientshtml);
}
function requestView(data){
    $("#sent-request-subject").html(data.message.subject);
    $("#sent-request-date").html(data.message.sent_datetime);
    $("#sent-request-price").html(data.message.price_range);
    $("#sent-request-from").html(data.message.first_name_1+" "+data.message.last_name_1);
    var recipients=Array();
    $.each(data.participants,function(idx,recipient){
        recipients.push(recipient.name);
    });
    var kywds="";
    $.each(data.keywords,function(idx,keyword){
        kywds+="<button class='btn btn-success type='button'>"+keyword.keyword+"</button>";
    });
     $("#sent-request-keywords").html(kywds);
    var recipientsout=recipients.join(",");
    $("#sent-request-recipients").html(recipientsout);
    $("#sent-request-body").html(data.message.body);

    $(".inboxview").hide();
    $("#requestview").fadeIn();
}
function getTree(message){
    
}
function onGeolocationSuccess(position){
        lat = position.coords.latitude;
        lon = position.coords.longitude;

}
function onGeolocationError(error) {
    alert('Please Turn On Location Services' );
}
        
