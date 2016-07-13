<?php
/**
 * File Name: navigation-post.php
 * Date: 12-07-2016
 * Time: 0:17
 * Description:
 */
?>
<nav class="next-prev clearfix">

	<?php if(!empty(get_permalink(get_the_ID()-1))):?>
		<div class="nav-previous">
			<div>Previous</div>
			<a href="<?php echo get_permalink(get_the_ID()-1) ?>"
			   rel="prev"><?php echo get_the_title(get_the_ID()-1);?><i class="fa fa-angle-left"></i></a>

		</div>
	<?php endif; ?>

	<?php if(!empty(get_permalink(get_the_ID()+1))):?>
		<div class="nav-next">
			<div>Next</div>
			<a href="<?php echo get_permalink(get_the_ID()+1);?>"
			   rel="next"><?php echo get_the_title(get_the_ID()+1);?><i
					class="fa fa-angle-right"></i></a></div>
	<?php endif;?>
</nav>

