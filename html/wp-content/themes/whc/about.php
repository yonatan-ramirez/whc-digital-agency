<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: About template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-digital-agency
 */

get_header();
?>
<div class="contianer text-center">
    <div class="row ">

        <div class="col-md-4">
            <?php dynamic_sidebar('sidebar-1') ?>
        </div>
		
        <div class="col-md-8">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </div>
    </div>
</div>




<?php

get_footer();
