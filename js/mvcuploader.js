<script type="text/javascript" src="jquery.wallform.js"></script>
$(document).ready(function() 
{ 
    $('#photoimg').live('change', function() 
     {
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
}); 