<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<div class="post_title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				
				<div class="post_date">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?><?php edit_post_link('Edit this post', ' | ', ''); ?></div>
				
				<div class="post_body">
					<?php the_content('Read the rest of this entry &raquo;'); ?>

					<div class="clearer">&nbsp;</div>

				</div>
				
				<div class="post_meta">
					Posted in <?php the_category(', ') ?><?php the_tags(' | Tags: ', ', ', ''); ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</div>

			</div>

		<?php endwhile; ?>
							
		<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		<div class="clearer">&nbsp;</div>			

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
