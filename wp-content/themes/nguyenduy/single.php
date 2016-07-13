<?php
/**
 * File Name: single.php
 * Date: 11-07-2016
 * Time: 1:41
 * Description:
 */
?>
<?php get_header(); ?>
<main>

	<div class="container dual-sidebar">
		<div class="row content-row">
			<div class="col-md-7 col-md-push-2 col-xs-12">
				<div class="content">
					<?php if (have_posts()): while (have_posts()):the_post(); ?>
						<?php $cat_id = get_the_category(); ?>
						<article id="post-<?php the_ID();?>"
						         <?php post_class();?>>

							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>

								<div class="entry-meta">
								<span class="entry-category"><a
										href="<?php echo get_category_link($cat_id[0]->term_id); ?>"
										rel="category tag"><?php echo $cat_id[0]->name; ?></a></span>
									| <span class="entry-date updated">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<time datetime="<?php the_date('d-M-y H:i:s'); ?>"
					      itemprop="datePublished"><?php echo get_the_date('d-M-Y'); ?></time>
				</a>
			</span> | <span class="entry-comments">
				<a href="<?php the_permalink(); ?>#respond">
					<i class="fa fa-comments-o"></i>
					0
				</a>
			</span> | by<span class="vcard">
				<a class="url fn"
				   href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>">
					<span itemprop="author"><?php echo get_the_author(); ?></span>
				</a>
			</span></div>
								<?php if(has_post_thumbnail()): // check has post thumbnails?>
							<div class="entry-image">
								<img
									src="<?php the_post_thumbnail_url();?>"
									alt="<?php the_title();?>" width="610" height="350"></div>
							<?php else: ?>
									<div class="entry-image">
										<img
											src="<?php echo THEME_IMAGES.'/no-image.png';?>"
											alt="<?php the_title();?>" width="610" height="350"></div>
							<?php endif;?>
							</header>

							<div class="entry-content">
								<?php the_content(); ?>
								<?php get_template_part('custom-functions/social-share'); ?>
							</div>
							<?php get_template_part('includes/single/entry-footer'); ?>
						</article>
					<?php endwhile; endif; ?>

					<?php comments_template();?>




				</div>
			</div>
			<?php get_template_part('includes/sidebar/left/main'); // get template main left side bar ?>
			<?php get_template_part('includes/sidebar/right/main'); // get template main right side bar ?>
		</div>
	</div>


</main>
<?php get_footer(); ?>
