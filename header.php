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

    do_action( 'onepress_site_start' );
?>

<?php 
wp_nav_menu(
array(
'theme_location' => 'secondary', /* identifiant du menu pour WP */
'menu_class' => 'menu-secondaire', /* classe css */
'container' => 'div', /* élément HTML conteneur */
'link_before' => '', /* élément HTML avant le lien */
'link_after' => '' /* élément HTML après le lien */
)
);

?>
<header>
            <nav class="navbar1 nav navbar-right navbar-fixed-top">
                <ul class="nav navbar-nav">
                    <li class="onglet1"><a href="index.html">Accueil</a></li>
                    <li class="onglet2"><a href="osteria.html">Osteria Mathi</a></li>
                    <li class="onglet3"><a href="#">Espace Mathi</a></li>
                    <li class="onglet4"><a href="boutique.html">E-shop</a></li>
                    <li>
                        <div class="form-group">
                            <input type="text" class="form-control search-bar" placeholder="Search">
                        </div>
                    </li>
                </ul>
                <div class="bande">

                </div>
            </nav>
            <div class="couverture">
                <img class="img-fluid" src="assets/img/couverture.png" alt="#">
                <img class="logo" src="assets/img/assomathi-logo-simple-bleu.png" alt="#">
            </div>
            <nav class="nav">
                <ul class="navbar2 nav navbar-nav">
                    <li class="onglet1"><a href="evenements.html">événements</a></li>
                    <li class="onglet2"><a href="videos.html">Vidéos</a></li>
                    <li class="onglet3"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>

