<?php get_header(); ?>
		<main class="container">
			<section id="content" class="col-md-8">
				<?php if (have_posts()) while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<h2 class="entry-title page-header">
							<?php the_title(); ?>
						</h2>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			</section>
			<?php get_sidebar(); ?>
		</main>
<?php get_footer(); ?>