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
		
				<div class="meta-column clearfix" id="post-tags">			
				<?php the_meta(); ?>
				</div>
			
			
			<div class="page-level clearfix">
			<?php
			if($post->post_parent){
			  $relations = get_post_ancestors($post->ID);
			  $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
			  if ($result){
			  			  foreach($result as $pageID){
			  			  			  array_push($relations, $pageID->ID);
			  			  }
			  }
			  array_push($relations, $post->ID);
			  $relations_string = implode(",",$relations);
			  $sidelinks = wp_list_pages("title_li=&echo=0&include=".$relations_string);
			}else{
			  $sidelinks = wp_list_pages("title_li=&echo=0&depth=1&child_of=".$post->ID);
				}
			if ($sidelinks) { ?>
			  <h2><?php the_title(); ?></h2>

			  <ul>
			  		<?php //links in <li> tags
			  			echo $sidelinks; ?>
			  </ul>
			  			  			  			  
			<?php } ?>
			</div>			
			
			
			</footer>
		
		</article> <!-- .post -->
		
		<div id="comment-area">
			<?php comments_template(); ?>
		</div>

	<?php endwhile; ?>
	</section>
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>