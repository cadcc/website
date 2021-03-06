<?php get_header(); ?>

	<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
 	  <?php } ?>

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
