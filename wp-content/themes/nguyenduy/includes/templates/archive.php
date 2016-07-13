<?php
/**
 * File Name: archive.php
 * Date: 11-07-2016
 * Time: 21:51
 * Description:
 */
?>
<div class="col-md-7 col-md-push-2 col-xs-12">
	<div class="content">
		<div class="posts blog-small">
			<?php if(have_posts()):while(have_posts()):the_post();?>
				<?php $cat=get_the_category($post->ID);

				?>
				<article id="post-<?php the_ID();?>"
					<?php post_class();?>>

					<?php if(has_post_thumbnail()): ?>
						<div class="entry-image">
							<a href="<?php the_permalink();?>"><img
									src="<?php the_post_thumbnail_url();?>"
									alt="<?php the_title();?>" width="270" height="180">

								<div class="overlay"><i class="fa fa-plus"></i></div>
							</a></div>
					<?php else: ?>
						<div class="entry-image">
							<a href="<?php the_permalink(); ?>"><img
									src="<?php echo THEME_IMAGES.'/no-image.png'; ?>"
									alt="<?php the_title();?>" width="270" height="180">

								<div class="overlay"><i class="fa fa-plus"></i></div>
							</a></div>
					<?php endif;?>

					<div class="entry-main">
						<div class="top-meta">
							<div class="post-format"><?php check_post_format($post->ID);?></div>

						</div>
						<h2 class="entry-title">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h2>

						<div class="entry-meta"><span class="entry-category"><a
									href="<?php echo get_category_link($cat[0]->term_id);?>"
									rel="category tag"><?php  echo (!empty($cat[0]->name))?  $cat[0]->name:''; ?></a><a
									href="<?php echo get_category_link($cat[1]->term_id);?>"
									rel="category tag"><?php  echo (!empty($cat[1]->name))? ', '.$cat[1]->name:''; ?></a></span> | by <span class="vcard">
					<a class="url fn" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );?>">
						<span><?php echo get_the_author();?></span>
					</a>
			</span></div>
						<div class="entry-content"><?php the_excerpt(); ?></div>
					</div>
					<div class="clear"></div>

				</article>
			<?php endwhile;/* end post*/ endif;?>
		</div>

		<div class="pagination">
			<?php pagination();?>
		</div><!-- close div pagination -->
	</div>
</div>
