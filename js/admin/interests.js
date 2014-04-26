$(document).ready(function(){
   $("#interest-selector").select2({
       width:"450px",
       placeholder:"Type to search Keywords..",
       multiple:false,
       minimumInputLength:2,
       ajax:{
           url:"/keyword/select2",
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
   $("#submit-interest").click(function(){
       var id=$("#interest-selector").select2("val");
       $.ajax({
          url:"/interests/accept_i/"+id,
          dataType:"json",
          success:function(data){
              listI(data);
              
          }
       });
   })
   $.ajax({
          url:"/interests/list_i/",
          dataType:"json",
          success:function(data){
              listI(data);
              
          }
       });
});
function listI(data){
    var buttonhtml="";
    $.each(data,function(idx,interest){
        buttonhtml+="<button class='btn btn-default' type='button'>"+interest.keyword+"<a href='#' data-id='"+interest.id+"'><i class='icon-remove' style='padding-left:5px;'></i></button>";
    });
    $("#interest-list").html(buttonhtml);
    $("#interest-list a").click(function(e){
       e.preventDefault();
       var id=$(this).attr("data-id");
       $.ajax({
           url:"/interests/delete_i/"+id,
           dataType:"json",
           success:function(data){
               listI(data);
           }
       })
    });
}
 