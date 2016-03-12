<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="site-wrapper">

      				<div class="site-wrapper-inner">

        			<div class="cover-container">

						<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

				</div>
			</div>
		</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->


	</main>


<?php get_footer(); ?>
