$(document).ready(function(){
    $("#bigmask").click(function(e){
        $(".maskhide").slideUp();
        $("#bigmask").fadeOut();
    });
    $("#maskclose").click(function(e){
        $("#publicprofile").slideUp();
        $("#bigmask").fadeOut();
    });
    maskAdjust();
});
function loadServiceList(editable,container){
         $.ajax({
             url:"/services/list/",
             dataType:"json",
             success:function(data){
                 listServices(data,editable,container);
             }
         });
}


function listServices(data,editable,container){
    var html="<div class='accordion' id='accordion2'>";
    $.each(data,function(idx,service){
        html+=createServiceDetail(idx,service,editable);
    });
    html+="</div>";
    $("#"+container).html(html);
    if(editable){
        $(".serviceedit").click(function(){
            var id=$(this).attr("data-id");
            loadServiceEditor(id);
        });
    }
}
function createServiceDetail(idx,service,editable){
    var instring="";
    if(idx==0){
        instring="in";
    }
    var html="<div class='accordion-group'>"+
                    "<div class='accordion-heading'>"+
                        "<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse-"+idx+"'>"+
                          "<i class='icon-tag'>"+service.service_name+"</i>"+
                        "</a>"+
                    "</div>"+
                    "<div id='collapse-"+idx+"' class='accordion-body collapse "+instring+"'>"+
                        "<div class='accordion-inner well-sm'>"+
                            "<ul class='thumbnails'>";
                    
                            $.each(service.photos,function(pidx,photo){
                                html+="<li>"+
                                  "<a href='#' class='thumbnail'>"+
                                    "<div class='service-img' style='background-image:url(/uploads/"+service.user_id+"/"+photo+");'></div>"+
                                  "</a>"+
                                "</li>";
                            });
                            
                        html+="</ul>";
                        
                          $.each(service.keywords,function(kidx,kname){
                                html+="<button class='btn btn-success btn-mini' type='button'>"+kname+"</button>";

                          });
                          
                          html+="<p>"+service.service_description+"</p>";
                  
                            if(editable){
                                html+="<img class='serviceedit' data-id='"+service.id+"'src='/images/icons/pencil-icon.png'>";
                            }
                            
                          html+="<p></p>"+
                        "</div>"+
                    "</div>"+
                "</div>";
     return html;   
}
function loadServiceEditor(id){
    $.ajax({
               url:"/services/detail/"+id,
               dataType:"json",
               success: function(data){
                   $("#service_name").val(data.service_name);
                   $("#service_id").val(data.id);
                   $("#service_keyword").select2({
                        width:"600px",
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
                        },
                        initSelection : function (element, callback) {
                            if(data.keywords)
                             callback(data.keywords);
                        }
                    });


                   $("#service_description").val(data.service_description);
                   $("#service_photo").val(data.service_photo);
                   $("#service_start").val(data.service_start);
                   $("#service_end").val(data.service_end);
                   var html="";
                   if(data.photos){
                        $.each(data.photos,function(idx,photo){
                            html+="<div class='service_photo' style='background:url(/uploads/"+data.user_id+"/"+photo.name+");'><a href='#' class='photo_delete' data-id='"+photo.id+"'>X</a></div>";
                        });
                   }
                   
                   $("#service_photo_mockup").html(html);
                   $(".photo_delete").click(function(e){
                       
                       e.preventDefault();
                        var photoid=$(this).attr('data-id');
                        var service_photo_val=$("#service_photo").val().trim();
                        var photos=service_photo_val.split(",");
                        removeA(photos,photoid);
                        var service_photo=photos.join(",");
                        $("#service_photo").val(service_photo);
                        $(this).parent().css("display","none");
                   });
                   $("#delete-service").show();
                   $("#serviceform").fadeIn();
                   $("#bigmask").fadeIn();
               }
            });
}
function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
