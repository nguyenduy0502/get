<?php
/**
 * File Name: functions.php
 * Date: 10-07-2016
 * Time: 14:50
 * Description: Main functions
 */
define("THEME_URL", get_template_directory_uri());
define("THEME_CSS", THEME_URL . '/public/css');
define("THEME_JS", THEME_URL . '/public/js');
define("THEME_IMAGES", THEME_URL . '/public/images');
define("THEME_PUBLIC", THEME_URL . '/public');
load_theme_textdomain('nguyenduy', THEME_URL . '/languages');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
	'gallery',
	'standard',
	'video'
));
/************************************************
 * ADD STYLE AND JS
 ************************************************
 */
add_action('wp_enqueue_scripts', 'add_style');
function add_style()
{
	wp_register_style('main_style', THEME_URL . '/style.css');
	wp_register_style('bootstrap.min', THEME_CSS . '/bootstrap.min.css');
	wp_register_style('flexslider', THEME_CSS . '/flexslider.css');
	wp_register_style('font-awesome.min', THEME_PUBLIC . '/font-awesome/css/font-awesome.min.css');
	wp_register_style('jquery.liScroll', THEME_CSS . '/jquery.liScroll.css');
	wp_register_style('prettyPhoto', THEME_CSS . '/prettyPhoto.css');
	wp_enqueue_style('main_style');
	wp_enqueue_style('bootstrap.min');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('font-awesome.min');
	wp_enqueue_style('jquery.liScroll');
	wp_enqueue_style('prettyPhoto');

}

add_action('wp_enqueue_scripts', 'add_js');
function add_js()
{
	wp_register_script('scripts', THEME_JS . '/scripts.js', array(), '', true);
	wp_register_script('jquery.fitvids', THEME_JS . '/jquery.fitvids.js', array(), '', true);
	wp_register_script('jquery.prettyPhoto', THEME_JS . '/jquery.prettyPhoto.js', array(), '', true);
	wp_register_script('jquery.prettyPhoto', THEME_JS . '/jquery.prettyPhoto.js', array(), '', true);
	wp_register_script('jquery.mobilemenu', THEME_JS . '/jquery.mobilemenu.js', array(), '', true);
	wp_register_script('jquery.flexslider-min', THEME_JS . '/jquery.flexslider-min.js', array(), '', true);
	wp_register_script('jquery.liScroll', THEME_JS . '/jquery.liScroll.js', array(), '', true);
	wp_register_script('retina.min', THEME_JS . '/retina.min.js', array(), '', true);
	wp_enqueue_script('scripts');
	wp_enqueue_script('jquery.fitvids');
	wp_enqueue_script('jquery.prettyPhoto');
	wp_enqueue_script('jquery.mobilemenu');
	wp_enqueue_script('jquery.flexslider-min');
	wp_enqueue_script('jquery.liScroll');
	wp_enqueue_script('retina.min');

}

add_action('wp_enqueue_scripts', 'add_jquery');
function add_jquery()
{
	wp_register_script('jquery-migrate.min330a', THEME_JS . '/jquery/jquery-migrate.min330a.js', array(), '');
	wp_register_script('jqueryb8ff', THEME_JS . '/jquery/jqueryb8ff.js', array(), '');
	wp_enqueue_script('jquery-migrate.min330a');
	wp_enqueue_script('jqueryb8ff');

}

/************************************************
 * REGISTER MENU
 ************************************************
 */
add_action('after_setup_theme', 'create_menu');
function create_menu()
{
	$locations = array(
		'primary-menu' => __('Primary Menu', 'nguyenduy')

	);
	register_nav_menus($locations);

}

/************************************************
 * SIDE BAR
 ************************************************
 */
if (function_exists('register_sidebar')) {
	$args_left = array(
		'name' => __('Left Sidebar', 'nguyenduy'),
		'id' => 'left-sidebar',
		'description' => 'Left sidebar',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>');
	$args_middle = array(
		'name' => __('Middle Sidebar', 'nguyenduy'),
		'id' => 'middle-sidebar',
		'description' => 'Middle sidebar',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'

	);
	$args_right = array(
		'name' => __('Right Sidebar', 'nguyenduy'),
		'id' => 'right-sidebar',
		'description' => 'Right sidebar',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'

	);
	register_sidebar($args_left);
	register_sidebar($args_middle);
	register_sidebar($args_right);
}
/************************************************
 * GET WIDGETS
 ************************************************
 */
require_once('widgets/home-content-1.php');
require_once('widgets/home-content-2.php');
require_once('widgets/categories.php');

/************************************************
 * GET CUSTOM FUNCTION
 ************************************************
 */
require_once('custom-functions/related-posts.php');
/************************************************
 * PAGINATION
 ************************************************
 */
function pagination($prev = '&laquo;', $next = '&raquo;')
{
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('paged', '%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'prev_text' => $prev,
		'next_text' => $next,
		'type' => 'plain'
	);
	if ($wp_rewrite->using_permalinks())
		$pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');

	if (!empty($wp_query->query_vars['s']))
		$pagination['add_args'] = array('s' => get_query_var('s'));

	echo paginate_links($pagination);
}

/************************************************
 * SHORT TITLE
 ************************************************
 */
function short_title($after = '', $length)
{
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle) >= $length) {
		array_pop($mytitle);
		$mytitle = implode(" ", $mytitle) . $after;


	} else {
		$mytitle = implode(" ", $mytitle);
	}
	return $mytitle;

}

/************************************************
 * CUSTOM COMMENT
 ************************************************
 */
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<article id="comment-<?php comment_ID(); ?>">
		<a href="" class="comment-avatar">
			<?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>

			<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</a>
		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.') ?></em>
			<br/>
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a
				href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '') ?>
		</div>

		<?php comment_text() ?>

		<div class="reply">
			<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</article>
	<?php
	}

	/************************************************
	 * CHECK POST FORMATS
	 ************************************************
	 */
	function check_post_format($post_id) {
		$type=get_post_format($post_id);
		switch($type){
			case 'video': echo ('<i class="fa fa-video-camera"></i>');
				break;
			case 'gallery': echo ('<i class="fa fa-camera"></i>');
				break;
			default:
				echo ('<i class="fa fa-pencil"></i>');
		}
	}
	/************************************************
	 * ADD CUSTOM FIELD
	 ************************************************
	 */
	add_action( 'show_user_profile', 'add_extra_social_links' );
	add_action( 'edit_user_profile', 'add_extra_social_links' );
	function add_extra_social_links( $user )
	{
		?>
		<h3>New User Profile Links</h3>

		<table class="form-table">
			<tr>
				<th><label for="facebook_profile">Facebook Profile</label></th>
				<td><input type="text" name="facebook_profile" value="<?php echo esc_attr(get_the_author_meta( 'facebook_profile', $user->ID )); ?>" class="regular-text" /></td>
			</tr>

			<tr>
				<th><label for="twitter_profile">Twitter Profile</label></th>
				<td><input type="text" name="twitter_profile" value="<?php echo esc_attr(get_the_author_meta( 'twitter_profile', $user->ID )); ?>" class="regular-text" /></td>
			</tr>

			<tr>
				<th><label for="google_profile">Google+ Profile</label></th>
				<td><input type="text" name="google_profile" value="<?php echo esc_attr(get_the_author_meta( 'google_profile', $user->ID )); ?>" class="regular-text" /></td>
			</tr>
		</table>
		<?php
	}
	add_action( 'personal_options_update', 'save_extra_social_links' );
	add_action( 'edit_user_profile_update', 'save_extra_social_links' );

	function save_extra_social_links( $user_id )
	{
		update_user_meta( $user_id,'facebook_profile', sanitize_text_field( $_POST['facebook_profile'] ) );
		update_user_meta( $user_id,'twitter_profile', sanitize_text_field( $_POST['twitter_profile'] ) );
		update_user_meta( $user_id,'google_profile', sanitize_text_field( $_POST['google_profile'] ) );
	}
	?>




