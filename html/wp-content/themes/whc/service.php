<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Services template
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
<section>
<div class="container text-center">
    <div class="row">
        <?php
        $serviceArgs = array(
            'post_type' => 'services',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $services = new WP_Query($serviceArgs);
        ?>
         <?php if($services -> have_posts()): while($services -> have_posts()): $services -> the_post() ?>
         
         <div class="col-md-4">
             <h2>
                 <?php the_title(); ?>
             </h2>
             
             <div class="img-box">
                 <?php the_post_thumbnail(); ?>
                 </div>
                 <p>
                <?php the_content(); ?>
                </p>
        </div>
        <?php endwhile; endif; ?>

        <div class="col-md-4">
            <?php dynamic_sidebar('sidebar-1') ?>
        </div>
    </div>
    </div>
</section>


<?php

get_footer();
