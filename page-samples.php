<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Writing Samples page
 * @package CEB
 */

get_header(); ?>

<div class="page-wrapper">
	<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'samples' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
</div>


<?php
get_footer();
