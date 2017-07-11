<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section class="container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<span><strong>Posted:</strong> <?php the_date(); ?></span>
			<?php the_excerpt(); ?>
		</article>
		<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>
		
	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>