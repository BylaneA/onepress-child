<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="onepress-child/bootstrap.css">
<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<?php do_action( 'onepress_before_site_start' ); ?>
<div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>

    <?php
    /**
     * Hooked: onepress_site_header
     *
     * @see onepress_site_header
     */
    do_action( 'onepress_site_start' );
    ?>




<?php 
wp_nav_menu(
array(
'theme_location' => 'secondary', /* identifiant du menu pour WP */
'menu_class' => 'navbar2', /* classe css */
'container' => 'div', /* élément HTML conteneur */
'link_before' => '', /* élément HTML avant le lien */
'link_after' => '' /* élément HTML après le lien */
)
);

?>




