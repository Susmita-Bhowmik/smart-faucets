<?php 
/** Template Name: Tiny USA */
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

  <section class="tiny_usa">
      <div class="container">
        <div class="text-center">
          <h2>TINY HOMES USA</h2>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="fig_holder">
              <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/tiny-001.webp)"></figure>
            </div>
          </div>
        </div>
        <div class="tiny_about">
          <div class="row">
            <div class="col-md-8">
              <div class="text">
                <h3>TINY HOMES USA</h3>
                <p>Please inquire about our Tiny Homes.  
                  We are pleased to announce that all tiny homes now come equipped with a complimentary unit of smart faucets installed as a standard feature.</p>
              </div>
            </div>
            <div class="col-md-4">
              <a href="#" class="a_btn">Find Out More</a>
            </div>
          </div>
        </div>
      </div>
  </section>

<?php 

get_footer();

?>