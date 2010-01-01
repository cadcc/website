				</div>
			</div>

			<div class="right" id="sidebar_outer">
				<div id="sidebar">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

	<?php if ( $recent_posts = get_posts('numberposts=10') ) : ?>
					
					<div class="box">
						
						<div class="box_title">Recent posts</div>

						<div class="box_content">
							<ul>
						<?php foreach ( $recent_posts as $post ) : setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>								
							</ul>
						</div>

					</div>

	<?php endif; ?>

					<div class="box">

						<div class="box_title">Categories</div>

						<div class="box_content">
							<ul>
								<?php wp_list_categories('title_li='); ?>
							</ul>
						</div>

					</div>

					<div class="box">

						<div class="box_title">Archives</div>

						<div class="box_content">
							<ul>
								<?php wp_get_archives('type=monthly&title_li='); ?>
							</ul>
						</div>

					</div>

					<div class="box">

						<div class="box_title">Search</div>

						<div class="box_content">
							<?php @include(TEMPLATEPATH . '/searchform.php'); ?>
						</div>

					</div>

<?php endif; ?>

				</div>
			</div>
