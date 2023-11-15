<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Smart Faucets</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/fav-icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">


	<?php wp_head(); ?>
</head>

<body>
<header class="main-header">
        <div class="container">
            <span class="pull_mob_nav">menu</span>
            <nav class="main-nav">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                             <?php  dynamic_sidebar('header_logo'); ?></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="nav-wapper">
                            <div class="nav-last">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );?>
                           
                            </div>
                            <a href="<?php echo site_url('/contact'); ?>" class="a_btn">Book Demo</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--  -->

