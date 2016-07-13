<?php
/**
 * File Name: comments.php
 * Date: 11-07-2016
 * Time: 15:07
 * Description:
 */
if ( post_password_required() ) {
	return;
}

?>
<div id="comments">
	<?php if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
		$comments_number = get_comments_number();
		if ( 1 === $comments_number ) {
			/* translators: %s: post title */
			printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'nguyenduy' ), get_the_title() );
		} else {
			printf(
			/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s thought on &ldquo;%2$s&rdquo;',
					'%1$s thoughts on &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'nguyenduy'
				),
				number_format_i18n( $comments_number ),
				get_the_title()
			);
		}
		?>
	</h2>


	<ul class="commentlist">
		<?php
		wp_list_comments( array(
			'style'       => 'ul',
			'short_ping'  => true,
			'avatar_size' => 45,
			'callback'=>'mytheme_comment'
		) );
		?>
	</ul><!-- .commentlist -->


	<?php endif; // Check for have_comments(). ?>
	<?php comment_form();?>


</div><!-- close id comments -->

