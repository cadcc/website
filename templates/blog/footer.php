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

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6250318-4");
pageTracker._trackPageview();
} catch(err) {}</script>

</html>