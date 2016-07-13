<?php
/**
 * File Name: index.php
 * Date: 10-07-2016
 * Time: 14:50
 * Description:
 */
?>
<?php get_header(); ?>
	<main>

		<div class="container dual-sidebar">
			<div class="row content-row">
				<?php get_template_part('includes/sidebar/middle/main'); // get template main middle side bar ?>
				<?php get_template_part('includes/sidebar/left/main'); // get template main left side bar ?>
				<?php get_template_part('includes/sidebar/right/main'); // get template main right side bar ?>
			</div>
		</div>


	</main>
<?php get_footer(); ?>