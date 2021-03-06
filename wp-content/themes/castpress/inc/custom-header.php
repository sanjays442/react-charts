<?php
/**
  * Sample implementation of the Custom Header feature 
  *
  *
  *  @link https://developer.wordpress.org/themes/functionality/custom-headers/
  *
  *  @package castpress
*/

/**
* Add your custom logo to the login page
*/
function castpress_filter_login_head() {
    if ( has_custom_logo() ) :
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    ?>

    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo esc_url($image[0]);?>);
            -webkit-background-size: <?php echo absint($image[1]) ?>px;
            background-size: <?php echo absint($image[1]) ?>px; 
            height: <?php echo absint($image[2]) ?>px;
            width: <?php echo absint($image[1]) ?>px;
        }
    </style>

    <?php
    endif;
}

add_action( 'login_head', 'castpress_filter_login_head', 100 );
