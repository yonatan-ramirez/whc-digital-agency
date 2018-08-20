<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Home template
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
<section style="
background: url('<?php echo( get_header_image() ); ?>');
 background-size: 100% 100%; 
 min-height: 100vh !important;
 ">
<div class="container text-center">
    <div class="row">
      <div class="col-md-6" style="
      padding-top: 7rem;
      padding-bottom: 7rem;
      color: lightgray;

      ">
      <?php 
        $firstArgs = array(
            'post_type' => 'first',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
       
        $first = new WP_Query($firstArgs);
        ?>
         <?php if($first -> have_posts()): while($first -> have_posts()): $first -> the_post() ?>

        <h2 style="
        font-weight: 700;
        "> 
        <?php the_title(); ?>
        </h2>

      <p class="text-primary" style="
      font-size: 25px;
      font-weight: 700;
      font-shadow: 2px 2px black;
      ">
      <?php the_content(); ?>
      </p>
      <button type="button" class="btn btn-dark">
        Purchase Now!
      </button>
      </div>
    </div>
        <?php endwhile; endif; ?>
</div>
</section>

<section>
    <?php
        $secondArgs = array(
            'post_type' => 'second',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $second = new WP_Query($secondArgs);
        ?>
         <?php if($second -> have_posts()): while($second -> have_posts()): $second -> the_post() ?>
        <div class="container text-center">
        <div class="col-md-12" 
        style="
        padding: 5rem;
        ">
        
         <h2>
                 <?php the_title(); ?>
             </h2>

                 <p>
                <?php the_content(); ?>
                </p>
        
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<section>
<div class="container text-center">
    <div class="row">
        <?php
        $thirdArgs = array(
            'post_type' => 'third',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $third = new WP_Query($thirdArgs);
        ?>
         <?php if($third -> have_posts()): while($third -> have_posts()): $third -> the_post() ?>
         
            <div class="col-md-4">

             <div style="
             font-size: 25px;
             ">
             <?php the_post_thumbnail(); ?>
                 </div>

             <h5>
                 <?php the_title(); ?>
             </h5>
             
                 
                 <p class="text-muted">
                <?php the_content(); ?>
                </p>
            </div>

        <?php endwhile; endif; ?>
    </div>
    </div>
</section>

<section style="
min-width: 100vw;
padding-top: 7rem;
padding-bottom: 7rem;
">
 <div class="bg-dark text-light text-center" style="
 padding-top: 10px;
 padding-bottom:10px;
 ">
  <div class="row">
  <?php
        $fourthArgs = array(
            'post_type' => 'fourth',
            'posts_per_page' => 4,
            'order' => 'ACS'
        );
        $fourth = new WP_Query($fourthArgs);
        ?>
         <?php if($fourth -> have_posts()): while($fourth -> have_posts()):  $fourth -> the_post() ?>
         
            <div class="col-md-3">

             <div style="
             font-size: 25px;
             ">
                 <?php the_title(); ?>
                 </div>

             
                 
                 <p class="text-muted">
                <?php the_content(); ?>
                </p>
            </div>

        <?php endwhile; endif; ?>
  
  </div>
 
 </div>
</section>

<section>
    <div class="container">
    <div class="row">

    <?php
        $fithArgs = array(
            'post_type' => 'fith',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $fith = new WP_Query($fithArgs);
        ?>
         <?php if($fith -> have_posts()): while($fith -> have_posts()): $fith -> the_post() ?>


        <div class="col-md-7">
         <h2>
                 <?php the_title(); ?>
             </h2>

                 <p>
                <?php the_content(); ?>
                </p>
        
        </div>
    <div class="col-md-5 img-circle" style="
    padding-top: 1rem;
    ">
    <?php the_post_thumbnail() ?>
    </div>
        <?php endwhile; endif; ?>
    </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row">

    <?php
        $sixArgs = array(
            'post_type' => 'six',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $six = new WP_Query($sixArgs);
        ?>
         <?php if($six -> have_posts()): while($six -> have_posts()): $six -> the_post() ?>


        <div class="col-md-6">
         <h2>
                 <?php the_title(); ?>
             </h2>

                 <p>
                <?php the_content(); ?>
                </p>
        
        </div>
        <?php endwhile; endif; ?>
    </div>
    </div>
</section>

<section>


    <?php
        $sevenArgs = array(
            'post_type' => 'seven',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $seven = new WP_Query($sevenArgs);
        ?>
         <?php if($seven -> have_posts()): while($seven -> have_posts()): $seven -> the_post() ?>
            <div class="col-md-12">
                 <p>
                <?php the_content(); ?>
                </p>
            </div>
        
        <?php endwhile; endif; ?>

</section>

<section class="text-center">
    <div class="container text-center" style="
    min-padding: 7rem;
    ">

    <?php
        $eightArgs = array(
            'post_type' => 'eight',
            'posts_per_page' => 3,
            'order' => 'ACS'
        );
        $eight = new WP_Query($eightArgs);
        ?>
         <?php if($eight -> have_posts()): while($eight -> have_posts()): $eight -> the_post() ?>

        <div class="col-md-12">
         <h2>
                 <?php the_title(); ?>
             </h2>

                 <p>
                <?php the_content(); ?>
                </p>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<section>
    <div class="row">
        
    </div>
</section>
<?php

get_footer();
