<?php get_header(); ?>
<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- ARTCLE-->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- BANNER -->
			
			<!-- /banner -->
			
			<!-- POST TITLE -->
			<div class="container nopad">
			<h1>
				<a href="<?php the_permalink(); ?>" class="headline" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- POST DETAILS BEFORE CONTENT -->
			<span class="byline"><?php 
			echo types_render_field("photo-author", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
			
			</div>
			
			<!-- /post details -->
			
			<!-- CONTENT -->
			<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-xs-12">	
				<?php the_content(); // Dynamic Content ?>

				<span class="bodycopy"><?php 
			echo types_render_field("snippet", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>
		
		</div>
		</div>
		<!-- /content -->

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

	</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>