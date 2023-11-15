<?php 



/** Template Name: Home */







get_header();



?>



    <!-- Banner -->

    <section class="main-banner">

        <div class="banner-slider">

        <?php

        if( have_rows('banner_slider') ):

        while( have_rows('banner_slider') ) : the_row(); ?>

            <div class="elements">

                <div class="fig-holder">

                    <figure style="background-image: url( <?php the_sub_field('banner_image'); ?>);"></figure>

                </div>

                <div class="banner_text">

                    <span> <?php the_sub_field('banner_title'); ?></span>

                    <h1> <?php the_sub_field('banner_subtitle'); ?></h1>

                    <p> <?php the_sub_field('banner_content'); ?></p>

                </div>

            </div>

        <?php

            endwhile;

            endif;

        ?>

            

            

        </div>

    </section>

    <!-- Banner -->



    <!-- About -->

    <section class="about-company">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="text">

                        <span class="span-text"> <?php the_field('about_section_title'); ?></span>

                        <h2> <?php the_field('about_section_subtitle'); ?></h2>

                        <p><?php the_field('about_content'); ?></p>

                        <a href="<?php echo site_url('/about'); ?>" class="a_btn">More About</a>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="about-slider">

                        <?php

                            if( have_rows('about_image_slider') ):

                             while( have_rows('about_image_slider') ) : the_row(); ?>

                                <div class="fig-holder">

                                    <!-- <figure style="background-image: url( <?php the_sub_field('about_image'); ?>);"></figure> -->
                                    <img src="<?php the_sub_field('about_image'); ?>" alt="">

                                </div>

                             <?php

                                endwhile;

                                endif;

                            ?>

                        

                        

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- About -->



    <!-- products -->

    <section class="Services_main">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                <div class="about-slider">

                    <?php

                        if( have_rows('service_image_slider') ):

                        while( have_rows('service_image_slider') ) : the_row(); ?>

                            <div class="fig-holder">

                                <!-- <figure style="background-image: url( <?php the_sub_field('service_image'); ?>);"></figure> -->
                                <img src="<?php the_sub_field('service_image'); ?>" alt="">

                            </div>

                        <?php

                            endwhile;

                            endif;

                        ?>





                    </div>

                    <!-- <div class="fig-holder">

                        <figure style="background-image: url(<?php the_field('services_iamge'); ?>);"></figure>

                    </div> -->

                </div>

                <div class="col-md-6">

                    <div class="text">

                        <span class="span-text">Services</span>

                        <h2><span>

                            <?php 

                                

                                $custom_logo_id = get_theme_mod( 'custom_logo' );

                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {

                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';

                                } else {

                                    echo '<h1>' . get_bloginfo('name') . '</h1>';

                                }

                                

                                ?></span>

                                <?php the_field('services_section_title'); ?></h2>

                        <h5><?php the_field('service_section_subtile'); ?></h5>

                        <p><?php the_field('service_section_content') ; ?></p>

                        <div class="bottom">

                            <h5><?php the_field('services_feature_title'); ?></h5>

                           <?php the_field('services_feature_content') ; ?>

                        </div>

                        <a href="#" class="a_btn">Know More</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- products -->



    <!-- SmartFaucets -->

    <section class="smart-faucets">

        <div class="container text-center">

            <span class="span-text">

                <?php 

                    

                    $custom_logo_id = get_theme_mod( 'custom_logo' );

                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if ( has_custom_logo() ) {

                        echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';

                    } else {

                        echo '<h1>' . get_bloginfo('name') . '</h1>';

                    }

                    

                    ?>

                    </span>

            <h2><?php the_field('smart_faucets_section_title'); ?></h2>

            <div class="row">

                <div class="col-md-6">

                    <div class="wapper">

                        <span class="icon-holder">

                            <img src="<?php the_field('smart_faucets_section_image') ; ?>" alt="">

                        </span>

                        <h5><?php the_field('our_misson_title') ; ?></h5>

                            <p><?php the_field('our_misson_subtitle'); ?></p>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="video_section">

                        <div class="fig-holder">

                            <figure><?php the_field('video_link') ; ?></figure>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- SmartFaucets -->



    <!-- Products main -->

    <section class="products_main">

        <div class="container">

            <div class="text-center">

                <span class="span-text">Products</span>

                <h2>Patented Green Technology</h2>

            </div>

            <div class="product_slider">

            <?php

            $args = array( 'post_type' => 'products', 'posts_per_page' => -1  ,'orderby' => 'ID','order' => 'ASC');

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();

            $products_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

            

            ?>

                <div class="elements">

                    <div class="product_slider_box">

                        <div class="fig_holder">

                            <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php  echo $products_image[0];?>);"></figure></a>

                        </div>

                        <div class="text">

                           <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>

                            <?php the_content(); ?>

                            <a href="<?php the_permalink() ; ?>" class="a_btn">Know More</a>

                        </div>

                    </div>

                </div>

                <?php endwhile; ?>

               <?php wp_reset_query(); ?>

                

            </div>

        </div>

    </section>

    <!-- Products main -->



    <!-- Mission/Vision -->

    <section class="mission-vision">

        <div class="container">

            <div class="text-center">

                <span class="span-text"><?php the_field('mission_vision_section_title'); ?></span>

                <h2><?php the_field('mission_vision_section_sub_title'); ?></h2>

            </div>

            <div class="row">

            <?php

            if( have_rows('mission_vision_box') ):

            while( have_rows('mission_vision_box') ) : the_row(); ?>

                 <div class="col-md-12">

                    <div class="box-wapper">

                        <div class="fig-holder">

<figure style="background-image: url(<?php the_sub_field('image'); ?>);"></figure>

                        </div>

                        <div class="text">

                            <span class="span-text"><?php the_sub_field('title'); ?></span>

                            <h2><?php the_sub_field('subtitle'); ?></h2>

                                <h5><?php the_sub_field('content'); ?></h5>

                            <div class="button-wapper">

                                <a href="<?php the_sub_field('donate_button'); ?>" class="a_btn" target="_blank">Donate Now</a>

                                <a href="#" class="a_btn">Know More</a>

                            </div>

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

    <!-- Mission/Vision -->



    <!-- water saving -->

    <section class="water_saving">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <span class="icon-holder">

                        <img src="<?php the_field('smart_faucets_section_image') ; ?>" alt="">

                    </span>

                </div>

                <div class="col-md-8">

                    <div class="text">

                        <span class="span-text"><?php the_field('smart_water_saving_section_title') ; ?></span>

                        <h2><span><?php 

                                

                                $custom_logo_id = get_theme_mod( 'custom_logo' );

                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {

                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';

                                } else {

                                    echo '<h1>' . get_bloginfo('name') . '</h1>';

                                }

                                

                                ?></span> <?php the_field('smart_water_saving_section_sub_title'); ?></h2>

                        <ul>

                              <?php

                            if( have_rows('water_saving_technology_list') ):

                            while( have_rows('water_saving_technology_list') ) : the_row(); ?>

                            <li> <?php the_sub_field('list_items'); ?></li>

                            <?php

                                endwhile;

                                endif;

                            ?>

                                                               

                            

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- water saving -->



    <!-- Contact Us index -->

    <section class="contact-us_index">

        <div class="container text-center">

            <span class="span-text">Contact Us</span>

            <h2>Book a Live Demo Today</h2>

            <div class="contact-form">

          

     <?php  echo do_shortcode('[contact-form-7 id="17ef395" title="Book a Live Demo Form"]'); ?> 

            </div>

            <h5>Book a Live Demo or Meeting below</h5>

            <a href="#" class="extra-laink" target="_blank">http://calendly.com/smartfaucets</a>

        </div>

    </section>

    <!-- Contact Us index -->



    <!-- Privacy Policy -->

    <section class="privacy-policy">

        <div class="text-center">

            <p>This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply</p>

        </div>

    </section>

    <!-- Privacy Policy -->



    <!-- Smart Faucets -->

    <section class="smart-faucets">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div class="wapper">

                        <h3><img src="<?php bloginfo('template_url'); ?>/img/Smart-Water-Saving-System-logo.png" alt=""></h3>

                        <h5>Mail in Donations</h5>

                        <ul>

                            <li>

                                <span><img src="<?php bloginfo('template_url'); ?>/img/icon-location.png" alt=""></span>

                                <p>

                                    <strong>Smart Water Saving System</strong>

                                    <?php the_field('smart_water_saving_system_address'); ?>

                                </p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="wapper">

                        <h3><?php 

                                

                                $custom_logo_id = get_theme_mod( 'custom_logo' );

                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {

                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';

                                } else {

                                    echo '<h1>' . get_bloginfo('name') . '</h1>';

                                }

                                

                                ?>

                                </h3>

                        <h5>Mail in Donations</h5>

                        <ul>

                            <li>

                                <span><img src="<?php bloginfo('template_url'); ?>/img/icon-location.png" alt=""></span>

                                <p>

                                    <strong>SmartFaucets.net</strong>

                                    <?php the_field('smart_faucets_location'); ?>

                                </p>

                            </li>

                        </ul>

                        <div class="contact-info">

                            <ul>

                                <li>

                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-location.png" alt=""></span>

                                    <strong>Telephone</strong>  <a href="tel:  <?php the_field('smart_faucets_phone'); ?>"> <?php the_field('smart_faucets_phone'); ?></a>

                                </li>

                                <li>

                                    <span><img src="<?php bloginfo('template_url'); ?>/img/icon-location.png" alt=""></span>

                                    <strong>Mail</strong> <a href="mailto:  <?php  dynamic_sidebar('contact_email'); ?>"> <?php  dynamic_sidebar('contact_email'); ?></a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                                            <h3><?php 

                                

                                $custom_logo_id = get_theme_mod( 'custom_logo' );

                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {

                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';

                                } else {

                                    echo '<h1>' . get_bloginfo('name') . '</h1>';

                                }

                                

                                ?>

                                </h3>

                        <h5>Donations Link</h5>
                   <p>For Credit or Debit card Donations please click below </p>
                    <a href="https://square.link/u/4lPIEzdH" target="_blank">https://square.link/u/4lPIEzdH</a>
                    


                </div>

            </div>

        </div>

    </section>

    <!-- Smart Faucets -->



    <!-- Hours -->

    <section class="hours_index">

        <div class="container">

            <div class="text-center">

                <h2>Hours</h2>

                <h5>Working Schedule</h5>

            </div>

            <ul>

            <?php

                if( have_rows('working_schedule_list') ):

                while( have_rows('working_schedule_list') ) : the_row(); ?>

                <li>

                <strong><?php the_sub_field('day'); ?></strong>

                <?php the_sub_field('time'); ?>

                </li>

                <?php

                    endwhile;

                    endif;

                ?>

                

            </ul>

        </div>

    </section>

    <!-- Hours -->

<?php get_footer(); ?>