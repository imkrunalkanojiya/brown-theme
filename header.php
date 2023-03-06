<?php
/**
 * The template for displaying the header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="theme-root">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-left">
                    <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <h2><?php bloginfo('name'); ?></h2>
                        <?php
                        }
                        ?>
                    </a>
                    </div>
                    <div class="col-right">
                        <!-- <input type="search" placeholder="Type something.." /> -->
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </header>