<?php get_header(); ?>
<main class="container">
	<section id="content" class="col-md-8">
		<?php if (have_posts()) while (have_posts()) : the_post();
		?>
		<article id="post-<?php the_ID(); ?>">
			<header class="post-header">
				<h2 class="post-title page-header"> <?php the_title(); ?> </h2>
			</header>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; ?>
	</section>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>