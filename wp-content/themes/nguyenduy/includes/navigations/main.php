<?php
/**
 * File Name: main.php
 * Date: 10-07-2016
 * Time: 15:51
 * Description: Main navigation
 */
?>
<nav class="mainnav">
	<?php wp_nav_menu(array(
		'theme_location'=>'primary-menu',
		'container'=>'div',
		'container_class'=>'container',
		'items_wrap'=>'<ul id="mainmenu" class="">%3$s</ul>'
	));?>
</nav>

