<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post_title"><h2><?php the_title(); ?></h2></div>
			<?php edit_post_link('Edit this page', '<div class="post_date">', '</div>'); ?>
			<div class="post_body">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<div class="clearer">&nbsp;</div>
			</div>

			<?php wp_link_pages(array('before' => '<div class="post_meta archive_pagination"><strong>Pages:</strong> ', 'after' => '</div>', 'next_or_number' => 'number')); ?>

		</div>
		
		<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>