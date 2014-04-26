$(document).ready(function(){
    loadCampaignThumbnails();
   $("#add-campaign").click(function(e){
       e.preventDefault();
       $("#campaignform").fadeIn();
       $("#bigmask").fadeIn();
   });
   $(".template").click(function(){
      var tid=$(this).attr("id").replace("template_","");

      switch(tid){
          case "1":
              $("#t_edit_1").css({
                 width:"520px",
                 height:"340px"
              });
              $("#t_edit_5").hide();
              break;
          case "2":
              $("#t_edit_1").css({
                 width:"520px",
                 height:"160px"
              });
              $("#t_edit_2").css({
                 width:"520px",
                 height:"160px"
              });
              $("#t_edit_5").hide();
              break;
          case "3":
              $("#t_edit_1").css({
                 width:"250px",
                 height:"160px"
              });
              $("#t_edit_2").css({
                 width:"250px",
                 height:"160px"
              });
              $("#t_edit_5").hide();
              break;
          case "4":
               $("#t_edit_1").css({
                 width:"250px",
                 height:"160px"
              });
              $("#t_edit_2").css({
                 width:"250px",
                 height:"160px"
              });
              $("#t_edit_5").show();
              break;
      }
   });
   $(".color").change(function(){
      var id=$(this).attr("id");
      var num=id.replace("bgcolor_","");
      $("#t_edit_"+num).css("background-color","#"+$(this).val());
   });

});
function loadCampaignThumbnails(){
    $.ajax({
           url:"/photo/list/",
           dataType:"json",
           success:function(data){
               showCampaignThumbnails(data); 
           }
    });
}
function showCampaignThumbnails(data){
    $.each(data.photos,function(idx,photo){
        if(photo.category!=="videophoto"){
          $("#campaign_thumbnails").append(
                  "<span class='tn_frame'>"+
                    "<img class='campaign_tn' data-id='"+ photo.id+"'src='"+photo.url+"'/>"+
                  "</span>"
          );
        }
        $(".campaign_tn").draggable({
           revert:true
        });
    });
}
/*
CKEDITOR.inline(".celledit",{
    toolbar:[
        { name:"test",items:["image"]},
    ]
})*/