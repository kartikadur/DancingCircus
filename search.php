<?php get_header(); ?>
	<main class="container">
		<section id="content" class="col-md-8 col-sm-12 col-xs-12">
			<h2 class="page-header">
				<?php printf(__('Search Results for: %s', 'dancingcircus'), get_search_query()); ?>
			</h2>
			<?php
			if (have_posts()) :
				/* Start the Loop */
				while (have_posts()) :
					the_post();
					get_template_part('content', get_post_format());
				endwhile;
			else :
				get_template_part('content', 'none');
			endif;
			?>
			<ul class="pager">
				<li class="previous"><?php previous_posts_link(); ?></li>
				<li class="next"><?php next_posts_link(); ?></li>
			</ul>
		</section>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>
