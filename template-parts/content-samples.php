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

        <?php if( have_rows('writing_sample') ): while ( have_rows('writing_sample') ) : the_row(); 
			// vars
			$title = get_sub_field('title');
            $description = get_sub_field('description');
            $image = get_sub_field('image');
            $type = get_sub_field('type');
            $role = get_sub_field('role');
			$link = get_sub_field('link');
        ?> 

        <div class="sample-item clearfix">
            <a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>"  /></a>
            <h3><?php echo $title; ?></h3>
            <p><?php echo $description; ?><br />
            <strong>Publication type:</strong> <?php echo $type; ?><br />
            <strong>Role:</strong> <?php echo $role; ?><br />
            <a href="<?php echo $link; ?>">View project ></a>
            </p>
        </div>

        <?php endwhile; ?>
		<?php endif; ?>	
    
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
