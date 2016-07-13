<?php
/**
 * File Name: archive.php
 * Date: 11-07-2016
 * Time: 13:10
 * Description: main archive
 */
?>
<?php get_header(); ?>
<main>
	<header class="archive-header"><?php the_archive_title('<h1 class="page-title">','</h1>');?></header>
	<div class="container dual-sidebar">
		<div class="row content-row">

			<?php get_template_part('includes/templates/archive');?>
			<?php get_template_part('includes/sidebar/left/main'); // get template main left side bar ?>
			<?php get_template_part('includes/sidebar/right/main'); // get template main right side bar ?>
		</div>
	</div>

</main>


<?php get_footer(); ?>
