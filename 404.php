<?php get_header(); ?>



		<section class="main-column">
		
		  <article class="post">
		  
			<header>
				<h1 class="post-title">Page Not Found</h1>
			</header>
			
			<section class="entry">
				<p>Looks like the page you're looking for isn't here anymore. </p><p>Try using the search box below.</p>
			</section>
			
			<footer>
				<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
					<input type="text" value="Search" onclick="value=''" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</form>
			<footer>
		
		  </article>
		
		</section> <!-- .main-column -->
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>