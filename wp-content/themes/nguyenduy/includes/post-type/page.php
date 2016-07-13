<?php
/**
 * File Name: page.php
 * Date: 11-07-2016
 * Time: 22:37
 * Description:
 */
?>
<?php if(have_posts()):while(have_posts()):the_post();?>

	<article id="post-<?php the_ID();?>" <?php post_class();?>>

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title();?></h1>
		</header>

		<div class="entry-content"><?php the_content();?></div>

	</article>

<?php endwhile; /* end post*/ endif;?>
