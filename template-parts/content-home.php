<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CEB
 */

?>

<div class="home-hero">
    <div class="container">
        <div class="hero-container-left">
            <div class="hero-callout">
                <h1><?php the_title(); ?></h1>
                <p><a href="/#more">read more <i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="home-entry-content" id="more">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>

