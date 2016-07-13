<?php
/**
 * File Name: search.php
 * Date: 11-07-2016
 * Time: 21:47
 * Description:
 */
?>
<?php get_header(); ?>
<main>
	<header class="archive-header"><h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'nguyenduy' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1></header>
	<div class="container dual-sidebar">
		<div class="row content-row">
			<?php get_template_part('includes/templates/archive'); // get template archive?>
			<?php get_template_part('includes/sidebar/left/main'); // get template main left side bar ?>
			<?php get_template_part('includes/sidebar/right/main'); // get template main right side bar ?>
		</div>
	</div>

</main>


<?php get_footer(); ?>
