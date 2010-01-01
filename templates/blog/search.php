<?php get_header(); ?>

	<?php if (have_posts()) : ?>

 		 <h2>Search Results</h2>

		<?php if ( is_paged() || count($posts) >= get_option('posts_per_page') ) : ?>
			<div class="post_meta archive_pagination">
							
				<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

				<div class="clearer">&nbsp;</div>
				
			</div>

		<?php else : ?>
		<div class="content_separator"></div>

		<?php endif;?>		

		<?php while (have_posts()) : the_post(); ?>

		<div class="archive_post">

			<div class="archive_post_date">
				<div class="archive_post_day"><?php the_time('j') ?></div>
				<div class="archive_post_month"><?php echo strtoupper(get_the_time('M')); ?></div>
			</div>

			<div class="archive_post_title">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<div class="post_date">Posted in <?php the_category(', ') ?> | <?php comments_popup_link('0 Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
			</div>

			<div class="post_body">
				<?php the_excerpt(); ?>
			</div>

			<div class="clearer">&nbsp;</div>

		</div>

		<div class="archive_separator"></div>

		<?php endwhile; ?>

		<?php if ( is_paged() || count($posts) >= get_option('posts_per_page') ) : ?>

			<div class="post_meta archive_pagination">
							
				<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

				<div class="clearer">&nbsp;</div>
				
			</div>

		<?php endif;?>

	<?php else : ?>		
		<p>No posts found.</p>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
