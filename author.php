<?php get_header(); ?>


	<section class="main-column">
	
		<header class="clearfix">
			<h1 id="author-name"><?php the_author_meta('display_name'); ?></h1>
			<div class="author-description">
				<?php the_author_meta('user_description'); ?>
			</div>
		</header>
			
		<ul class="author-posts">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <li>
        	<h4>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            	<?php the_title(); ?>
            </a>
            </h4>
            <div class="meta-column"><time datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time> in <?php the_category(' & ');?></div>
        </li>

    	<?php endwhile; else: ?>
        <li><?php echo('No posts by this author.'); ?></li>

    	<?php endif; ?>
    	</ul>

    	
	</section>
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>