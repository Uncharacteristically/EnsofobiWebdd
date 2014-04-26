<div class="jarviswidget">
	<div class="inner-spacer"> 
		<div class="inbox-body" id="inbox-body-js">
			<div class="inbox-control-panel">
				<a href="javascript:void(0)" id='compose-mail' class="btn medium btn-primary pull-right"><i class="icon-star"></i> Compose Message</a>
			</div>
                        <?php echo View::factory("components/inbox/body");?>
		</div>
		<div class="inbox-menu">
			<?php echo View::factory("components/inbox/menu");?>
		</div>
	</div>
</div>
