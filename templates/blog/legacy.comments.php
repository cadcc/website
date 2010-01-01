<?php

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( function_exists('post_password_required') && post_password_required() ) { ?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
	return;
}

?>

<?php if ( have_comments() ) : ?>

	<h3 class="left" id="comments">Comments: <?php echo $post->comment_count; ?></h3>
	<?php if ($post->comment_status == 'open') : ?>
	<p class="right"><a href="#reply">Leave a reply &#187;</a></p>
	<?php endif; ?>

	<div class="clearer">&nbsp;</div>

	<div class="comment_list">

	<?php foreach ( $comments as $comment ) : ?>
		<div class="comment">

			<div class="comment_gravatar left"><?php echo get_avatar( $comment, 32 ); ?></div>

			<div class="comment_author left">
				<?php comment_author_link() ?>
				<div class="comment_date"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('Edit  comment', ' | ', ''); ?></div>
			</div>

			<div class="clearer">&nbsp;</div>
			
			<div class="comment_body">									
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em>Your comment is awaiting moderation.</em></p>
				<?php endif; ?>

				<?php comment_text() ?>
			</div>
				
		</div>

	<?php endforeach; ?>
	</div>

	<div class="clearer">&nbsp;</div>

<?php else : ?>

	<h3 id="comments">Comments</h3>
	<p>No comments so far.</p>

<?php endif; ?>

<?php if ($post->comment_status != 'open') : ?>
	<p>(comments are closed)</p>

<?php else : ?>

<div id="reply">

	<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link(); ?></small>
	</div>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<fieldset>

			<div class="legend"><h3><?php comment_form_title('Leave a Reply', 'Leave a Reply to %s' ); ?></h3></div>

	<?php if ( $user_ID ) : ?>

			<div class="form_row">
				<div style="padding: 0 12px">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></div>
			</div>

	<?php else : ?>

			<div class="form_row">
											
				<div class="form_property <?php if ($req) echo "form_required"; ?>"><label for="author">Name <?php if ($req) echo "*"; ?></label></div>
				<div class="form_value"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="28" tabindex="1" /></div>

				<div class="clearer">&nbsp;</div>

			</div>

			<div class="form_row">
											
				<div class="form_property <?php if ($req) echo "form_required"; ?>"><label for="author">Mail <?php if ($req) echo "*"; ?></label></div>
				<div class="form_value"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" /> (will not be published)</div>

				<div class="clearer">&nbsp;</div>

			</div>

			<div class="form_row">
											
				<div class="form_property"><label for="author">Website</label></div>
				<div class="form_value"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" /></div>

				<div class="clearer">&nbsp;</div>

			</div>

<?php endif; ?>

			<div class="form_row">
										
				<div class="form_property form_required">Comment</div>
				<div class="form_value"><textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></div>

				<div class="clearer">&nbsp;</div>

			</div>

			<div class="form_row form_row_submit">
										
				<div class="form_value"><input type="submit" class="button" value="Submit Comment" /></div>

				<div class="clearer">&nbsp;</div>

			</div>

			<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

			<div><?php comment_id_fields(); ?></div>

		</fieldset>

	</form>

		<?php do_action('comment_form', $post->ID); ?>

	<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
