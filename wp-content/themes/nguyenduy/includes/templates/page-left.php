<?php
/**
 * File Name: page-left.php
 * Date: 11-07-2016
 * Time: 22:26
 * Description:
 *
 */
?>
<?php get_header();?>
<main>

	<div class="container left-sidebar">
		<div class="row content-row">
			<div class="col-md-10 col-md-push-2">
				<div class="content">
					<?php get_template_part('includes/post-type/page'); // loop get content page?>

					<?php comments_template();?>

				</div>
			</div>
			<div class="col-md-2 col-md-pull-10 sidebar">
				<?php if (is_active_sidebar('left-sidebar')):
					dynamic_sidebar('left-sidebar');
				endif;
				?>
			</div>

		</div>
	</div>
</main>
<?php get_footer();?>
