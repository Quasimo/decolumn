<?php get_header(); ?>

		<section class="main-column">

		<?php if(have_posts()) : ?>
		
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		
		<header>
		
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="archive-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="archive-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="archive-title">Author Archive</h1>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="archive-title">Blog Archives</h1>
		<?php } ?>
		
		</header>
			
		<?php while(have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="<?php the_ID(); ?>">
		
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="post-column clearfix">
					
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
			
			<div class="post-info clearfix">				
				<span class="post-date"><?php the_time(get_option('date_format')); ?></span>
 				<span class="sep sep4">-</span>  				
				<span class="post-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a></span>
 				<span class="sep sep6">-</span>
 				<span class="post-categories"><?php the_category(' '); ?></span>			  							
			</div>				
		
		</div> <!-- .post -->

		<?php endwhile; else : ?>

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

		<?php endif; ?>
	
		<nav class="page-nav">
			<ul class="clearfix">
				<li class="left"><?php previous_posts_link() ?></li>
				<li class="right"><?php next_posts_link() ?></li>
			</ul>
		</nav>
		
		</section> <!-- .main-column -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>