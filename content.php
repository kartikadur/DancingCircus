<?php
/*
 * Content Page used for:
 * 1. index page
 * 2. single page
 * 3. archive page
 * 4. search page
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ):
	?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php endif; ?>
	<header class="post-header <?php
		if(has_post_thumbnail())
			echo "has-post-thumbnail";
	?>">
		<?php
		if(is_single()) {
		the_title("<h2 class='post-title page-header'>","</h2>");
		} else {
		the_title("<h2 class='post-title page-header'><a href='".esc_url(get_permalink())."' rel='bookmark' title='Permanent Link to ".the_title_attribute('echo=0')."'>","</a></h2>");
		}
		?>
	</header>

	<div class="post-content">
		<?php
		if(is_single()) {
		the_content();
		} else {
		the_excerpt();
		}
		wp_link_pages(array('before'=>'<div class="page-links"><span class="page-links-title">'.__('Pages:','dancingcircus').'</span>','after'=>'</div>','link_before'=>'<span>','link_after'=>'</span>',));
		?>
	</div>
	<div class="post-meta clearfix">
		<?php
		if(is_single()) {
		echo '<div class="post-author label pull-left">Author '.get_the_author_meta('display_name').'</div>'.'<time class="post-date label pull-left" datetime="'.esc_attr(get_the_date('c')).'">Posted on '.esc_html(get_the_date()).'</time>';
		} else {
		echo '<div class="post-author label pull-left">Author '.get_the_author_meta('display_name').'</div>'.'<time class="post-date label pull-left" datetime="'.esc_attr(get_the_date('c')).'">Posted on <a href="'.esc_url(get_permalink()).'" rel="bookmark" title="Permanent Link to '.the_title_attribute('echo=0').'">'.esc_html(get_the_date()).'</a></time>';
		}
		if(has_category()) :
		echo "<div class='post-categories label pull-left'>Posted in ".get_the_category_list(_x(', ','Used between list items, there is a space after the comma.','dancingcircus'))."</div>";
		endif;
		if(has_tag()) :
		the_tags("<div class='post-tags label pull-left'>Tagged ",", ","</div>");
		endif;
		?>
	</div>
</article><!-- End of Post -->