<div class="topfobi span4">
	<div id="topholderarts"><strong><a href="browser_top10.php">Top Fobi Arts</a></strong></div>
	<div class="thumsbhold">
		<ul class="thumbnails">
		<?php
			for($i=1;$i<9;$i++){
				echo <<<EOT
			<li>
				<a href="#" data-toggle="tooltip" title="User Name for Artist #$i" class="thumbnail">
					<img src="/images/$i.gif" alt="$i" width="25" height="25" border="0"/>
				</a>
			</li>
EOT;
			}
		?>
		</ul> 
	</div>
	<br />
	<div id="topholderbusiness"><strong><a href="browser_top10.php">Top Fobi Business</a></strong></div>
	<div class="thumsbhold">
		<ul class="thumbnails">
		<?php
			for($i=1;$i<9;$i++){
				echo <<<EOT
			<li>
				<a href="#" data-toggle="tooltip" title="User Name for Business #$i" class="thumbnail">
					<img src="/images/$i.gif" alt="$i" width="25" height="25" border="0"/>
				</a>
			</li>
EOT;
			}
		?>
		</ul> 
	</div>
	<div id="topholdercommunity"><strong><a href="browser_top10.php">Top Fobi Community</a></strong></div>
	<div class="thumsbhold">
		<ul class="thumbnails ">
		<?php
			for($i=1;$i<9;$i++){
				echo <<<EOT
			<li>
				<a href="#" data-toggle="tooltip" title="User Name for Business #$i" class="thumbnail">
					<img src="/images/$i.gif" alt="$i" width="25" height="25" border="0"/>
				</a>
			</li>
EOT;
			}
		?>
		</ul> 
	</div> 
</div>
<br style="clear:both;"/>
<div class="divider"></div>

