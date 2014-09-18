	<div class="Footer">
		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				<aside class="Footer-logo u-gridCol4">
				  <img src="/files/2014/06/zeisterlogowit.png"></img>
				</aside>
				
				<aside class="u-gridCol8">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					  <div class="Footer-social widget">
						<h4 class="widgettitle">Volg ons</h4>
						<a href="https://twitter.com/zstukadoors">
							<svg class="Icon Icon--standalone" viewBox="0 0 128 128">
								<use xlink:href="#icon-twitter"></use>
							</svg>
						</a>
						<a href="https://www.youtube.com/user/Zeisterstukadoors">
							<svg class="Icon Icon--standalone" viewBox="0 0 128 128">
								<use xlink:href="#icon-youtube"></use>
							</svg>
						</a>
					  </div>
				</aside>
			</div>
			<?php endif; ?>
	</div>
  <div class="u-gridContainer">
      <div class="u-gridRow">
	   <p class="Footer-text">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website en SEO door <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden.nl</a> - <a href="/algemene-voorwaarden/">Algemene voorwaarden</a>
	<!-- - <a href="/privacy-beleid">Privacy beleid</a> -->
		</p>
      </div>
</div>


	<!-- Copyright info -->


  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->
 
  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
