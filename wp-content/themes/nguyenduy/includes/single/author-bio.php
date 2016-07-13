<?php
/**
 * File Name: author-bio.php
 * Date: 11-07-2016
 * Time: 23:54
 * Description:
 */
?>
<div class="author-info block">
	<header>
		<h2 class="block-title">About the Author</h2>
	</header>
	<div class="author-avatar">
		<?php echo get_avatar(array('size'=>80));?>
	</div>
	<div class="author-link">
		<h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );?>" title="Visit John Doe’s website"
		       rel="author external"><?php echo get_the_author();?></a></h4>

		<div class="widget_g7_social">
			<ul class="horizontal square">
				<?php if(!empty(get_the_author_meta('facebook_profile'))): // check has facebook?>
				<li class="social-facebook">
					<a href="<?php echo get_the_author_meta('facebook_profile',$user->ID);?>" title="Facebook" target="_blank">
										<span class="social-box">
											<i class="fa fa-facebook"></i>
										</span>
					</a>
				</li>
				<?php endif; // end check has facebook?>
				<?php if(!empty(get_the_author_meta('google_profile'))): // check has google?>
				<li class="social-google">
					<a href="<?php echo get_the_author_meta('google_profile',$user->ID);?>" title="Google" target="_blank">
										<span class="social-box">
											<i class="fa fa-google-plus"></i>
										</span>
					</a>
				</li>
				<?php endif; // end check has google?>
				<?php if(!empty(get_the_author_meta('twitter_profile'))): // check has Twitter?>
				<li class="social-twitter">
					<a href="<?php echo get_the_author_meta('twitter_profile',$user->ID);?>" title="Twitter" target="_blank">
										<span class="social-box">
											<i class="fa fa-twitter"></i>
										</span>
					</a>
				</li>
				<?php endif; // end check has Twitter?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="author-description">
		<?php echo get_the_author_meta('description');?>
	</div>
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );?>" rel="author"
	   class="author-posts">
		View all posts by <?php echo get_the_author();?> <span class="meta-nav">?</span>
	</a>
</div>
