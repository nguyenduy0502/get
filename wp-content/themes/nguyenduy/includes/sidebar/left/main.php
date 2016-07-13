<?php
/**
 * File Name: main.php
 * Date: 10-07-2016
 * Time: 15:58
 * Description: Main left side bar
 */
?>
<div class="col-md-2 col-md-pull-7 col-xs-6 sidebar">
	<?php if (is_active_sidebar('left-sidebar')):
		dynamic_sidebar('left-sidebar');
	endif;
	?>
</div>
