<?php
/**
 * File Name: home-content-2.php
 * Date: 10-07-2016
 * Time: 19:16
 * Description: Display content style 2
 */
add_action('widgets_init', 'home_content_2');
function home_content_2()
{
	register_widget('Home_Content_2');
}

class Home_Content_2 extends WP_Widget
{

	function __construct()
	{
		parent::__construct(
			'home_content_2',
			'Home Content Style 2',
			array(
				'description' => 'Display home content style 2'
			)
		);
	}

	function form($instance)
	{
		$defaults = array(
			'title' => 'New Post',
			'id_category' => 9,
			'number' => 3
		);
		$instance = wp_parse_args((array)$instance, $defaults);
		?>
		<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
		       name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
		<label for="<?php echo $this->get_field_id('id_category') ?>">Category: </label>
		<select name="<?php echo $this->get_field_name('id_category') ?>"
		        id="<?php $this->get_field_id('id_category'); ?>">
			<?php $list_category = get_categories(); ?>
			<?php foreach ($list_category as $category): ?>

				<option
					value="<?php echo $category->term_id ?>" <?php if ($category->term_id == $instance['id_category']) echo 'selected="selected"' ?>><?php echo $category->name; ?></option>
			<?php endforeach; ?>
		</select>
		<br>
		<label for="<?php echo $this->get_field_id('number') ?>">Number: </label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('number'); ?>"
		       name="<?php echo $this->get_field_name('number'); ?>"
		       value="<?php echo esc_attr($instance['number']); ?>">

	<?php }

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['id_category'] = $new_instance['id_category'];
		$instance['number'] = $new_instance['number'];
		return $instance;
	}

	function widget($args, $instance)
	{
		extract($args);
		$title = $instance['title'];
		$number = $instance['number'];
		$id_category = $instance['id_category'];
		echo $args['before_widget']; ?>
		<?php
		$args_query = array(
			'cat' => $id_category,
			'posts_per_page' => $number

		);
		$query = new WP_Query();
		$query->query($args_query);

		?>

		<div class="block block-2">
			<header>
				<h2 class="block-title">
					<a href="<?php echo get_category_link($id_category);?>"><?php echo get_cat_name($id_category);?> </a></h2>
			</header>
			<ul class="row">
				<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
				<li class="col-sm-6 post">
					<?php if(has_post_thumbnail()): // check post thumbnail?>
						<div class="block-top">
							<a href="<?php the_permalink();?>"><img
									src="<?php the_post_thumbnail_url();?>"
									alt="<?php the_title();?>" title="<?php the_title();?>" width="480" height="285">

								<div class="overlay"><i class="fa fa-plus"></i></div>
							</a></div>
						<?php else:?>
						<div class="block-top">
							<a href="<?php the_permalink();?>"><img
									src="<?php echo THEME_IMAGES . '/no-image.png';?>"
									alt="<?php the_title();?>" title="<?php the_title();?>" width="480" height="285">

								<div class="overlay"><i class="fa fa-plus"></i></div>
							</a></div>
						<?php endif; // end check?>
					<div class="block-content">
						<h3 class="block-heading">
							<a href="<?php the_permalink();?>"><?php echo short_title('...',6);?></a>
						</h3>

						<div class="block-meta">
						<span class="entry-date updated">
				<a href="<?php the_permalink();?>">
					<time datetime="<?php echo get_the_date('d-m-Y H:i:s')?>"><?php echo get_the_date('d-M-Y');?></time>
				</a>
			</span> | <span class="entry-comments">
				<a href="<?php echo get_comment_link();?>">
					<i class="fa fa-comments-o"></i>
					0
				</a>
			</span></div>
					</div>
				</li>
               <?php endwhile; /* end while */ endif; ?>
			</ul>
		</div>
		<?php echo $args['after_widget'];
	}


}
?>