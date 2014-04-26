$(document).ready(function(){
    $("#add-interests").click(function(){
        if($("#interest-manager").css("display")=="block"){
            $("#interest-manager").slideUp();
        }else{
            $("#interest-manager").slideDown();
        }
        
    });
    $("#keyword-accept").droppable({
         drop:function(event,ui){
             var dragId=ui.draggable.attr("data-id");
             $.ajax({
                url:"/interests/accept/?id="+dragId+"&status=bad",
                dataType:"json",
                success:function(data){
                    showInterests(data);
                }
             });
         }
     });
     $("#keyword-discard").droppable({
         drop:function(event,ui){
             var dragId=ui.draggable.attr("data-id");
             $.ajax({
                url:"/interests/discard/?id="+dragId+"&status=bad",
                dataType:"json",
                success:function(data){
                    showInterests(data);
                }
             });
         }
     });
     listInterests();
});
function listInterests(){
    $.ajax({
       url:"/interests/list",
       dataType:"json",
       success:function(data){
           showInterests(data);
       }
    });
}
function showInterests(data){
    var buttonhtml="";
    var html="";
    $("#keyword-accept").html("");
    $.each(data,function(idx,interest){
        buttonhtml+="<button class='btn btn-default' type='button'>"+interest.keyword+"<a href='#' data-id='"+interest.id+"'><i class='icon-remove' style='padding-left:5px;'></i></button>";
        html+="<a class='klink keyword-link' data-id='"+interest.id+"' href='#'>"+interest.keyword+"</a>";
    });
    $("#interest-list").html(buttonhtml);
    $("#keyword-accept").html(html);
    $("#keyword-discard").html("");
    $("#keyword-accept a").draggable({
        revert:"invalid"
    });
    $("#interest-list a").click(function(e){
       e.preventDefault();
       var id=$(this).attr("data-id");
       $.ajax({
           url:"/interests/discard/"+id,
           dataType:"json",
           success:function(data){
               showInterests(data);
           }
       })
    });
    
}
        
