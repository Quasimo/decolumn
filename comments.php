	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'toolbox' ); ?></p>
	</div><!-- #comments -->
	<?php
			return;
		endif;
	?>


	<?php if ( have_comments() ) : ?>
		<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?> on &#8220;<?php the_title(); ?>&#8221;</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<div class="navigation">
 			 <?php paginate_comments_links(); ?> 
 		</div>
		<?php endif; // check for comment navigation ?>

		<ul class="commentlist">
			<?php
				wp_list_comments();
			?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<div class="navigation">
 			 <?php paginate_comments_links(); ?> 
 		</div>
		<?php endif; // check for comment navigation ?>

	<?php

		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php echo( 'Comments are closed.'); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->