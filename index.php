<?php get_header(); ?>


		<section class="main-column">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="<?php the_ID(); ?>">
		
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="post-column clearfix">
				
 				<?php if ( has_post_thumbnail()) : ?>
   					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   						<?php the_post_thumbnail('thumbnail'); ?>
   					</a>
				<?php endif; ?>
				
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
				
			</div>
			
			<div class="post-info clearfix">				
 				<span class="post-time"><?php the_time('g:i a'); ?></span>
 				<span class="sep sep1">-</span>
				<span class="post-date"><a href="<?php echo get_day_link('', '', ''); ?>"><?php the_time('d'); ?></a></span>
 				<span class="sep sep2">/</span>
				<span class="post-month"><a href="<?php echo get_month_link('', ''); ?>"><?php the_time('m'); ?></a></span>
 				<span class="sep sep3">/</span> 
				<span class="post-year"><a href="<?php echo get_year_link(''); ?>"><?php the_time('Y'); ?></a></span>
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
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
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
		
		</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>