<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			
			<div class="post_title"><h1><?php the_title(); ?></h1></div>
				
			<div class="post_date">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?><?php edit_post_link('Edit this post', ' | ', ''); ?></div>

			<div class="post_body">
				
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<div class="clearer">&nbsp;</div>

				<?php wp_link_pages(array('before' => '<div class="post_meta archive_pagination"><strong>Pages:</strong> ', 'after' => '</div>', 'next_or_number' => 'number')); ?>

			</div>

			<div class="post_meta">
				Posted in <?php the_category(', ') ?><?php the_tags(' | Tags: ', ', ', ''); ?>
			</div>			

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
