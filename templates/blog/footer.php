			<div class="clearer">&nbsp;</div>

		</div>

		<div id="dashboard">
			<div id="dashboard_inner">

				<div class="col3 left">
					<div class="col3_content">

						<div class="col_title">Blogroll</div>
						<ul>
							<?php wp_list_bookmarks('title_li=&categorize=0&limit=5'); ?>
						</ul>

					</div>
				</div>

				<div class="col3mid left">
					<div class="col3_content">

						<div class="col_title">Tags</div>
						<p><?php wp_tag_cloud('number=28&smallest=9&largest=18'); ?></p>

					</div>
				</div>

				<div class="col3 right">
					<div class="col3_content">

						<div class="col_title">Resources</div>
						<ul>
							<li><a href="http://templates.arcsin.se/">Arcsin Web Templates</a> - Free Templates</li>
							<li><a href="http://www.google.com/">Google</a> - Web Search</li>
							<li><a href="http://www.w3schools.com/">W3Schools</a> - Online Web Tutorials</li>
							<li><a href="http://www.wordpress.org/">WordPress</a> - Blog Platform</li>
							<li><a href="http://cakephp.org/">CakePHP</a> - PHP Framework</li>
						</ul>

					</div>
				</div>

				<div class="clearer">&nbsp;</div>

			</div>
		</div>

	</div>
	</div>

	<div id="footer">

		<div class="left">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="<?php bloginfo('rss2_url'); ?>">RSS</a>
		</div>
		<div class="right">
			<a href="http://templates.arcsin.se/">WordPress Theme</a> by <a href="http://arcsin.se/">Arcsin</a> 
		</div>
		
		<div class="clearer">&nbsp;</div>

	</div>

</div>
</div>

<?php wp_footer(); ?>

</body>
</html>