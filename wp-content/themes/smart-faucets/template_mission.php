<?php 
/** Template Name: Mission */

get_header();

?>
<section class="about-page-banner">

<div class="banner-text">

  <div class="container">

    <h2><?php the_title(); ?></h2>

  </div>

</div>

</section>

<section class="welcome-about">

  <div class="container">

    <div class="row">
    <?php
    if( have_rows('mission_image_box') ):
    while( have_rows('mission_image_box') ) : the_row(); ?>

    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="wapper">

            <div class="fig-holder">

                <figure style="background-image: url( <?php the_sub_field('mission_image'); ?>);"> </figure>

            </div>
        
        </div>
    </div>

    <?php
        endwhile;
        endif;
    ?>

     

      

    </div>

  </div>

</section>


<section class="welcome-about">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-12">

        <div class="wapper">

          <h2> <?php the_field('mission_title'); ?> </h2> 

          <?php the_field('mission_content'); ?>

        </div>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">

        <div class="wapper">

          <div class="fig-holder">

            <figure style="background-image: url(<?php the_field('mission_image'); ?>);">

            </figure>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<?php get_footer(); ?>