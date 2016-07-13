<?php
/**
 * File Name: breaking-news.php
 * Date: 10-07-2016
 * Time: 15:53
 * Description:
 */
?>
<div class="breaking-news">
	<h3>Breaking News</h3>
	<?php $args=array(
		'posts_per_page'=>5,
		'orderby'=>'rand',
		'ignore_sticky_posts'=>true
	);
	$query=new WP_Query();
	$query->query($args);
	?>
	<ul class="ticker">
		<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
		<li>
			<a href="<?php the_permalink();?>"><?php the_title();?><span><?php echo get_the_date('d-M-Y'); ?></span></a>
		</li>

		<?php endwhile; /* end post*/ endif;?>
<?php wp_reset_query();?>
	</ul>
</div>
