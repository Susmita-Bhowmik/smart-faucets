
<?php 
/** Template Name: Holiday */

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

<section class="holiday_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="fig_holder">
            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/extra_04.jpeg)"></figure>
          </div>
        </div>
        <div class="col-md-8">
          <div class="text">
            <h2>HOLIDAY INN CASE STUDY</h2>
            <p>Holiday Inn California replaced their Sloan Sensor faucets with SmartFaucets. 
            This helps To save the Environment plus  Costly Engineers Time changing Batteries Find out how SmartFaucets can be a win win for you</p>
            <a href="<?php echo site_url('/contact'); ?>" class="a_btn">contact us for more info</a>
          </div>
        </div>
      </div>
      <div class="bottom_part_video">
        <div class="row">
          <div class="col-md-5">
            <h2>CHECK OUT THIS GREAT VIDEO</h2>
            <figure></figure>
          </div>
        </div>
      </div>
    </div>
</section>



<?php 

get_footer();

?>