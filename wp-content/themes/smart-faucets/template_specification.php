<?php 
/** Template Name: Specification */
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
      <div class="row">
        <div class="col-md-4">
          <div class="pdf_holder">
            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/pdf-001.png)"></figure>
          </div>
          <div class="text">
            <h2>PDF VIEWER</h2>
            <a href="<?php bloginfo('template_url'); ?>/img/Smf-box-dimensions-02-02-23.pdf" download>Download PDF</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pdf_holder">
            <figure style="background-image: url(<?php bloginfo('template_url'); ?>/img/pdf-002.png)"></figure>
          </div>
          <div class="text">
            <h2>PDF VIEWER</h2>
            <a href="<?php bloginfo('template_url'); ?>/img/pdf-002.pdf" download>Download PDF</a>
          </div>
        </div>
      </div>
    </div>
</section>

<?php 

get_footer();

?>