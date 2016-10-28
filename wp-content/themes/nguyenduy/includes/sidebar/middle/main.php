<?php
/**
 * File Name: main.php
 * Date: 10-07-2016
 * Time: 16:03
 * Description:
 */
?>
<div class="col-md-7 col-md-push-2 col-xs-12">
	<div class="content">
		<?php /*if (is_active_sidebar('middle-sidebar')):
	dynamic_sidebar('middle-sidebar');
endif;
*/ ?>
		<?php global $asite_options; ?>
		<?php $args= array(
			'cat' => $asite_options['opt_content_cat'],
			'posts_per_page' => $asite_options['opt_content_number'],
			'orderby'=>$asite_options['opt_content_orderby']
		);?>
		<?php $query = new WP_Query(); $query->query($args);?>
		<div class="block block-2">
			<header>
				<h2 class="block-title">
					<a href="<?php echo get_category_link($asite_options['opt_content_cat']); ?>"><?php echo get_cat_name($asite_options['opt_content_cat']); ?> </a>
				</h2>
			</header>
			<ul class="row">
				<?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
					<li class="col-sm-6 post">
						<?php if (has_post_thumbnail()): // check post thumbnail?>
							<div class="block-top">
								<a href="<?php the_permalink(); ?>"><img
										src="<?php the_post_thumbnail_url(); ?>"
										alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="480"
										height="285">

									<div class="overlay"><i class="fa fa-plus"></i></div>
								</a></div>
						<?php else: ?>
							<div class="block-top">
								<a href="<?php the_permalink(); ?>"><img
										src="<?php echo THEME_IMAGES . '/no-image.png'; ?>"
										alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="480"
										height="285">

									<div class="overlay"><i class="fa fa-plus"></i></div>
								</a></div>
						<?php endif; // end check?>
						<div class="block-content">
							<h3 class="block-heading">
								<a href="<?php the_permalink(); ?>"><?php echo short_title('...', 6); ?></a>
							</h3>

							<div class="block-meta">
						<span class="entry-date updated">
				<a href="<?php the_permalink(); ?>">
					<time
						datetime="<?php echo get_the_date('d-m-Y H:i:s') ?>"><?php echo get_the_date('d-M-Y'); ?></time>
				</a>
			</span> | <span class="entry-comments">
				<a href="<?php echo get_comment_link(); ?>">
					<i class="fa fa-comments-o"></i>
					0
				</a>
			</span></div>
						</div>
					</li>
				<?php endwhile; /* end while */
				endif; ?>
			</ul>
		</div>
	</div>
</div>





