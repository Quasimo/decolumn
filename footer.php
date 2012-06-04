		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'bottomNav', 'depth' => 0 , 'fallback_cb' => '', 'container_class' => 'menu-bottom-nav-container clearfix' ) ); ?>
			
			<div class="bottom-column">
				<p id="copyright">&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</p>
				<p id="generator">Powered by <span id="decolumn-mark"><a href="http://decolumn.com" title="A clean and awesome HTML5 Wordpress theme framework with Responsive Web Design，Special for iPhone and iPad. 干净的HTML5 WordPress模版框架，自适应屏幕，特别面向iPhone和iPad浏览。">deColumn Theme</a></span> for <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'decolumn' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'column' ); ?>" rel="generator"><?php printf( __( '%s', 'decolumn' ), 'WordPress' ); ?></a></p>
			</div>
			<?php wp_footer(); ?>
		</footer>
	</div> <!-- #footer-container -->
	
</div>
</body>
</html>