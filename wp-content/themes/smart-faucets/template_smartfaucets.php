<?php 
/** Template Name: Smart Faucets */
get_header();

?>

<!-- About-banner -->
<section class="about-page-banner">
  <div class="banner-text">
    <div class="container">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>
<!-- About-banner -->

<section class="products_speci">
    <div class="container">
      <div class="text-center"> 
        <h2>MOTION SENSOR FAUCET WITH SMART TOUCHPAD</h2>
      </div>
      <div class="products_speci_slider">
          <div class="elements">
            <div class="fig_holder">
              <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/p-01.jpg)"></figure>
            </div>
          </div>
          <div class="elements">
            <div class="fig_holder">
              <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/p-02.jpg)"></figure>
            </div>
          </div>
          <div class="elements">
            <div class="fig_holder">
              <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/p-03.jpg)"></figure>
            </div>
          </div>
          <div class="elements">
            <div class="fig_holder">
              <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/p-02.jpg)"></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<?php 
get_footer();
?>