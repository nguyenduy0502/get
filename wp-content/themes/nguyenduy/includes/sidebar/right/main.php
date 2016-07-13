<?php
/**
 * File Name: main.php
 * Date: 10-07-2016
 * Time: 16:00
 * Description:
 */
?>
<div class="col-md-3 col-xs-6 sidebar">
	<div id="g7_posts-7" class="widget widget_g7_posts"><h2 class="widgettitle">
			<?php if (is_active_sidebar('right-sidebar')):
				dynamic_sidebar('right-sidebar');
			endif;
			?>
	</div>
</div>
