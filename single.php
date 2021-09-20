<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->
  <style>

  .page .entry-title, .single .entry-title, .blog .entry-title {
    font-weight: bold;
    font-size:36px; 
    border-bottom:none;
  }
  .entry-meta .author {
    text-transform: capitalize;
  }
  </style>

<?php
get_sidebar();
get_footer();
