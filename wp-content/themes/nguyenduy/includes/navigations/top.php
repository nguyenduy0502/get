<?php
/**
 * File Name: top.php
 * Date: 10-07-2016
 * Time: 15:55
 * Description:
 */
?>
<div class="row">
	<div class="col-sm-6 col-sm-push-3 col-xs-12">
		<div class="logo"><a href="<?php echo home_url();?>" rel="home"><img
					src="../../wp-content/uploads/sites/2/2014/05/headline-news1.png"
					alt="<?php bloginfo('name')?>"></a></div>
	</div>
	<div class="col-sm-3 col-sm-pull-6 col-xs-6">
		<div class="header-time">
			<i class="fa fa-clock-o"></i>
			<span><?php echo date(' H:i');?></span>
		</div>
		<div class="header-date"><?php echo date( 'Y-m-d');?></div>
		<form action="<?php echo home_url();?>" class="header-search">
			<i class="fa fa-search"></i>
			<input type="text" name="s" placeholder="Search...">
		</form>
	</div>
	<div class="col-sm-3 col-xs-6">
		<?php ?>
		<ul id="topmenu" class="">
			<?php
			$args=array('post_type'=>'page','post__in'=>array('1086','1066'));
			$query=new WP_Query();
			$query->query($args);
			?>
			<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>

			<li id="menu-item-<?php the_ID();?>"
			   <?php post_class();?>>
				<a href="<?php the_permalink();?>"><?php the_title();?></a></li>
			<?php endwhile;  endif?>
		</ul>
		<?php wp_reset_query();?>

	</div>
</div>
