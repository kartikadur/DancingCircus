<article id="no-result" <?php post_class(); ?>>
	<header class="post-header">
		<h2 class="post-title page-header">Nothing Found</h2>		
	</header>
	<div class="post-content clearfix">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.','dancingcircus'),admin_url('post-new.php')); ?></p>
	
		<?php elseif ( is_search() ) : ?>
	
		<p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.','dancingcircus'); ?></p>
		<?php get_search_form(); ?>
	
		<?php else : ?>
	
		<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.','dancingcircus'); ?></p>
		<?php get_search_form(); ?>
	
		<?php	endif; ?>
	</div>
</article>
