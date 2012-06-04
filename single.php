<?php get_header(); ?>


	<section class="main-column">
	<?php while(have_posts()) : the_post(); ?>
	
		<article class="post" id="<?php the_ID(); ?>">
			<header>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</header>
			
			<section class="entry clearfix">
				<?php the_content(); ?>
			</section>
			
			
			<footer>
			
				<?php wp_link_pages(); ?>
			
				<?php edit_post_link(); ?>
				
			<!-- Post Meta Start -->

				<div class="meta-column clearfix" id="post-time"><span class="meta-title">Posted:</span> <a href="<?php echo get_month_link('', ''); ?>" title="Archive for this month."><?php the_time('F j, Y'); ?></a> at <?php the_time('g:i a'); ?></div>
				<div class="meta-column clearfix" id="post-author"><span class="meta-title">Author:</span> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a></div>
				<div class="meta-column clearfix" id="post-categories"><span class="meta-title">Categories: </span> <?php the_category(' '); ?></div>				
				<div class="meta-column clearfix" id="post-tags"><span class="meta-title">Tags:</span> <?php the_tags(' '); ?></div>
				<div class="meta-column clearfix" id="post-tags">
				<span class="meta-title">Tags:</span> 			
				<?php the_meta(); ?>
				</div>
				
			<!-- Post Meta End -->
			</footer>
		
		</article> <!-- .post -->
		
		<div id="comment-area">
			<?php comments_template(); ?>
		</div>

		<div class="post-nav">
			<ul class="clearfix">
				<li class="leftx"><?php previous_post_link() ?></li>
				<li class="rightx"><?php next_post_link(); ?></li>
			</ul>
		</div>



	<?php endwhile; ?>
	</section>
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>