$(document).ready(function(){
         listKeywords();
     $("#good-keywords").droppable({
         drop:function(event,ui){
             var dragId=ui.draggable.attr("data-id");
             $.ajax({
                url:"/keyword/move/?id="+dragId+"&status=good",
                dataType:"json",
                success:function(data){
                    showKeywords(data);
                }
             });
         }
     });
     $("#bad-keywords").droppable({
         drop:function(event,ui){
             var dragId=ui.draggable.attr("data-id");
             $.ajax({
                url:"/keyword/move/?id="+dragId+"&status=bad",
                dataType:"json",
                success:function(data){
                    showKeywords(data);
                }
             });
         }
     });
    $("#keyword-search").keyup(function(){
        var query=$(this).val();
        $("#keyword-create").val(query);
        if($(this).val().length>2){
            $.ajax({
                url:"/keyword/search/?query="+ query,
                dataType:"json",
                success: function(data){
                    showSearchKeywords(data);
                    
                }
            });
        }
    });
    $("#merge-search").keyup(function(){
        var query=$(this).val();
        if($(this).val().length>2){
            $.ajax({
                url:"/keyword/search/?query="+ query,
                dataType:"json",
                success: function(data){
                    showMergeKeywords(data);
                    
                }
            });
        }
    });
    
    $("#keyword-save").click(function(e){
       e.preventDefault();
       var formData=$("#new-keyword").serialize();
       $.ajax({
          url:"/keyword/create/?"+formData,
          dataType:"json",
          success:function(data){
              var html="";
              $.each(data.new,function(idx,keyword){
                  html+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>";
              });
               $("#new-keywords").html(html);
                $("#keyword-create").val("");
                $("#keyword-search").val("");
                $("#keyword-search").focus();
                makeKeywordsDraggable();
          }
       });
    });
});
function listKeywords(){
    $.ajax({
          url:"/keyword/list/",
          dataType:"json",
          success:function(data){
            showKeywords(data);   
            $("#keyword-create").val("");
            $("#keyword-search").val("");
            $("#keyword-search").focus();
          }
       });
}
function showKeywords(data){
    $("#new-keywords").html("");
    $("#good-keywords").html("");
    $("#bad-keywords").html("");
    var newlist="";
    if(data.new){
        $.each(data.new,function(idx,keyword){
            newlist+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>  ";
        });
        $("#new-keywords").html(newlist);
        
    }
    var goodlist="";
    if(data.good){
        $.each(data.good,function(idx,keyword){
            goodlist+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>  ";
        });
        $("#good-keywords").html(goodlist); 
        
    }
    var badlist="";
    if(data.bad){
        $.each(data.bad,function(idx,keyword){
            badlist+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>  ";
        });
        $("#bad-keywords").html(badlist);
        
    }
    makeKeywordsDraggable();
}
function makeKeywordsDraggable(){
    $("#good-keywords a").draggable({revert:"invalid"});
    $("#bad-keywords a").draggable({revert:"invalid"});
    $("#new-keywords a").draggable({revert:"invalid"});
}
function showSearchKeywords(data){
    
    var html="";
    if((data.length)>0){
        $.each(data,function(idx,keyword){
            html+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>";
        });
    }else{
        var query=$("#keyword-search").val();
        html=" No keywords matching '"+query+"' found. Click 'Save' to create.";   
    }
    $("#search-keywords").html(html);
    $("#search-keywords a").draggable({revert:"invalid"});
}
function showMergeKeywords(data){
    var html="";
    if((data.length)>0){
        $.each(data,function(idx,keyword){
            html+="<a class='klink keyword-link' data-id='"+keyword.id+"' href='#'>"+keyword.keyword+"</a>";
        });
    }else{
            var query=$("#merge-search").val();
            html=" No keywords matching '"+query+"' found. Click 'Save' to create.";   
    }
    $("#merge-keywords").html(html);
    $("#merge-keywords a").droppable({
        drop:function(event,ui){
            var draggedId=ui.draggable.attr("data-id");
            var droppedId=$(this).attr("data-id");
            var searchQuery=$("#keyword-search").val();
            var mergeQuery=$("#merge-search").val();
            $.ajax({
               url:"/keyword/merge/?selected="+draggedId+"&target="+droppedId+"&searchQuery="+searchQuery+"&mergeQuery="+mergeQuery,
               dataType:"json",
               success:function(data){
                   showKeywords(data.list);
                   if(searchQuery!==""){
                       showSearchKeywords(data.search);
                   }
                   showMergeKeywords(data.merge);
               }

            });
            alert(draggedId +" dragged to "+droppedId);
        }
    });
}
        
