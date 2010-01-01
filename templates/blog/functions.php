<?php

add_filter( 'comments_template', 'legacy_comments' );

function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'before_widget' => '<div class="box widget %2$s" id="%1$s">',
        'after_widget' => '<div class="clearer">&nbsp;</div></div></div>',
        'before_title' => '<div class="box_title">',
        'after_title' => '</div><div class="box_content">',
    ));
}

function cerulean_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
?>
	<div class="comment" <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment_gravatar left"><?php echo get_avatar($comment,32); ?></div>
		<div class="comment_author left">
			<?php comment_author_link() ?>
			<div class="comment_date"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('Edit comment', ' | ', ''); ?></div>
		</div>
		<div class="clearer">&nbsp;</div>
			
		<div class="comment_body">									
			<?php if ( $comment->comment_approved == '0' ) : ?>
			<p><em>Your comment is awaiting moderation.</em></p>
			<?php endif; ?>

			<?php comment_text(); ?>
			<div class="clearer">&nbsp;</div>
			
			<?php if ( $depth < $args['max_depth'] ) : ?>
			<p><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></p>
			<?php endif; ?>

		</div>		
	</div>
<?php
}

function the_subpages()
{
	global $post, $wpdb;
	
	if ( is_page() )
	{
		$child_of = null;

		if ( $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type='page' && post_parent = ".$post->ID) > 0 ){
			$child_of = $post->ID;
		}
		else if ( $post->post_parent != 0 ){
			$child_of = $post->post_parent;
		}

		if ( !is_null($child_of) )
		{
			echo '<div id="nav2">' . "\n";
				echo '<ul>' . "\n";
					wp_list_pages('title_li=&child_of='.$child_of);
				echo '</ul>' . "\n";
				echo '<div class="clearer">&nbsp;</div>' . "\n";
			echo '</div>' . "\n";			
		}
	}
}

?>