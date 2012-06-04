			<aside class="side-column">

				<div class="column clearfix" id="blog-description">
					<h3>About <?php bloginfo('name'); ?></h3>
					<?php bloginfo('description'); ?>	
				</div>			
				
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				
				
				<div class="column clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'sideNav', 'items_wrap' => '<nav><ul class="clearfix"><li id="item-id"></li>%3$s</ul></nav>', 'container_class' => 'menu-side-nav-container' ) ); ?>
				</div>
				
				<div class="column">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    					<div><label class="screen-reader-text" for="s">Search for:</label>
        				<input type="text" value="" name="s" id="s" />
        				<input type="submit" id="searchsubmit" value="Search" />
    					</div>
					</form>
				</div>
				<?php endif; ?>
			
			</aside>