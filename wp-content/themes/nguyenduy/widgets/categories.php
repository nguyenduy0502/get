<?php
/**
 * File Name: categories.php
 * Date: 11-07-2016
 * Time: 1:15
 * Description: Show list categories
 */
add_action('widgets_init', 'list_categories');
function list_categories()
{
	register_widget('List_Categories');
}

class List_Categories extends WP_Widget
{

	function __construct()
	{
		parent::__construct(
			'list_categories',
			'List Categories',
			array(
				'description' => 'Show list categories'
			)
		);
	}

	function form($instance)
	{
		$defaults = array(
			'title' => 'CATEGORIES',

		);
		$instance = wp_parse_args((array)$instance, $defaults); ?>
		<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
		       name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
		<?php

	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		return $instance;
	}

	function widget($args, $instance)
	{
		extract($args);
		$title = $instance['title'];
		echo $args['before_widget'];
		?>
		<div id="categories-3" class="widget widget_categories"><h2 class="widgettitle"><span><?php echo $title;?></span></h2><ul>
			<?php wp_list_categories(array('title_li'=>''));?>

			</ul></div>
		<?php
		echo $args['after_widget'];
	}


}

?>