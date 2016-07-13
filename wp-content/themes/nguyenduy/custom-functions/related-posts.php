<?php
/**
 * File Name: related-posts.php
 * Date: 11-07-2016
 * Time: 1:47
 * Description:
 */
function get_relatedpost_cat()
{
	$categories = get_the_category($post->ID);
	if ($categories):
		$category_ids = array();
		foreach ($categories as $individual_category):
			$category_ids[] = $individual_category->term_id;
			$args = array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'showposts' => 2, // Sô l??ng bài vi?t mu?n hi?n th? ra
				'ignore_sticky_posts' => 1,
				'orderby' => 'rand');
			$my_query = new WP_Query($args);
		endforeach;
		if ($my_query->have_posts()):
			if (is_single()):?>
				<div class="related-posts block">
					<header>
						<h2 class="block-title">Related Posts</h2>
					</header>
					<ul class="row block">
						<?php while ($my_query->have_posts()):
							$my_query->the_post(); ?>
							<li class="col-xs-3 post">
								<?php if(has_post_thumbnail()):?>
							<div class="block-top">
								<a href="<?php the_permalink(); ?>">
									<img
										src="<?php echo get_the_post_thumbnail_url(); ?>"
										alt="<?php the_title(); ?>"
										width="270" height="180">

									<div class="overlay"><i class="fa fa-plus"></i></div>
								</a></div>
									<?php else: ?>
									<div class="block-top">
										<a href="<?php the_permalink(); ?>">
											<img
												src="<?php echo THEME_IMAGES.'/no-image.png'; ?>"
												alt="<?php the_title(); ?>"
												width="270" height="180">

											<div class="overlay"><i class="fa fa-plus"></i></div>
										</a></div>
							<?php endif; ?>
								<div class="block-content">
									<h4 class="block-heading">
										<a href="<?php the_permalink(); ?>"><?php echo short_title('...',10); ?></a>
									</h4>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>

			<?php endif; endif; endif;
	wp_reset_query();
}

?>





