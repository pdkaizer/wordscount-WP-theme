<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CEB
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_title( '<h1>', '</h1>' ); ?>

	<div class="entry-content">
        <?php the_content(); ?>
        
        <h3 class="testimonials">Testimonials</h3>
        <?php if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); 
			// vars
            $quote = get_sub_field('quote');
            $person = get_sub_field('person');
            $company = get_sub_field('company');
        ?> 
        <div class="quote">
        &ldquo;<?php echo $quote; ?>&rdquo;<br />
        &mdash; <span class="quote-person"><?php echo $person; ?> | <?php echo $company; ?></span>
        </div>
        
    
        <?php endwhile; ?>
		<?php endif; ?>	
    
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
