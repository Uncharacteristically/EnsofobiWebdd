<?php echo View::factory("jarvis/foot/modal");?>
<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/libs/jquery.min.js"><\/script>')</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="/js/libs/jquery.ui.min.js"><\/script>')</script>
<script src="/js/include/jquery.ui.touch-punch.min.js"></script>
<script src="/js/include/selectnav.min.js"></script>
<script src="/js/include/jquery.accordion.min.js"></script>
<script src="/js/include/toastr.min.js"></script>
<script src="/js/include/jquery.jgrowl.min.js"></script>
<script src="/js/include/slimScroll.min.js"></script>
<script src="/js/include/jquery.dataTables.min.js"></script>
<script src="/js/include/DT_bootstrap.min.js"></script>
<script src="/js/include/jquery.uniform.min.js"></script>
<script src="/js/include/amchart/amcharts.js"></script>
<script src="/js/include/amchart/amchart-draw1.js"></script>
<script type="text/javascript">
	var ismobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));	
	if(!ismobile){
	    	/** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS FALSE **/
	    	/* REQUIRED: Datatable PDF/Excel output componant */
	    	document.write('<script src="/js/include/ZeroClipboard.min.js"><\/script>'); 
	    	document.write('<script src="/js/include/TableTools.min.js"><\/script>'); 
	    	document.write('<script src="/js/include/select2.min.js"><\/script>');
	    	document.write('<script src="/js/include/jquery.excanvas.min.js"><\/script>');
	    	document.write('<script src="/js/include/jquery.placeholder.min.js"><\/script>');
	}else{
		document.write('<script src="/js/include/selectnav.min.js"><\/script>');
	}
</script>
<script src="/js/include/jquery.ibutton.min.js"></script>
<script src="/js/include/raphael.2.1.0.min.js"></script>
<script src="/js/include/justgage.min.js"></script>
<script src="/js/include/morris.min.js"></script> 
<script src="/js/include/morris-chart-settings.js"></script> 
<script src="/js/include/jquery.easy-pie-chart.min.js"></script>
<script src="/js/include/jarvis.widget.min.js"></script>
<script src="/js/include/mobiledevices.min.js"></script>
<script src="/js/include/jquery.fullcalendar.min.js"></script>		
<script src="/js/include/jquery.flot.cust.min.js"></script>			
<script src="/js/include/jquery.flot.resize.min.js"></script>		
<script src="/js/include/jquery.flot.tooltip.min.js"></script>		
<script src="/js/include/jquery.flot.orderBar.min.js"></script> 	
<script src="/js/include/jquery.flot.fillbetween.min.js"></script>	
<script src="/js/include/jquery.flot.pie.min.js"></script> 	 
<script src="/js/include/jquery.sparkline.min.js"></script>
<script src="/js/include/jquery.inbox.slashc.sliding-menu.js"></script> 
<script src="/js/include/jquery.validate.min.js"></script>
<script src="/js/include/bootstrap-progressbar.min.js"></script>
<script src="/js/include/wysihtml5-0.3.0.min.js"></script>
<script src="/js/include/bootstrap-wysihtml5.min.js"></script>
<script src="/js/include/jquery.maskedinput.min.js"></script>
<script src="/js/include/bootstrap-datepicker.min.js"></script>
<script src="/js/include/bootstrap.wizard.min.js"></script> 
<script src="/js/include/bootstrap-colorpicker.min.js"></script>
<script src="/js/include/bootstrap-timepicker.min.js"></script> 
<script src="/js/include/bootbox.min.js"></script>
<script src="/js/include/bootstrap.min.js"></script>
<script src="/js/config.js"></script>
<!-- d3 library placed at the bottom for better performance -->
<!-- DISABLED  <script src="/js/include/d3.v3.min.js"></script> -->
<!-- DISABLED  <script src="/js/include/adv_charts/d3-chart-1.js"></script> -->
<!-- DISABLED  <script src="/js/include/adv_charts/d3-chart-2.js"></script> -->
<!-- Google Geo Chart -->
<!-- DISABLED <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script> -->
<!-- DISABLED <script type='text/javascript' src='https://www.google.com/jsapi'></script>-->
<!-- DISABLED <script src="/js/include/adv_charts/geochart.js"></script> -->
<!-- end scripts -->
  </body>
</html>
