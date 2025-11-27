<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ptz-diesel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header container">
    <div class="header__nav">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.png" alt="" width="113"
             height="113" class="logo__img">
        <nav class="header__menu hidden-mobile">
            <ul>
                <li><a href="">каталог товаров</a></li>
                <li><a href="">доставка и оплата </a></li>
                <li><a href="">контакты</a></li>
                <li><a href="">о нас</a></li>
                <li><a href="">корзина</a></li>
            </ul>
        </nav>
    </div>
    <div class="header__contact">
        <a href="tel:+7(8142)33-10-33" class="header__phone">+7 (8142) 33-10-33</a>
        <button class="btn btn--small btn--white header__btn">позвонить</button>
    </div>
    <div class="header__burger burger-menu">
        <span></span><span></span><span></span>
    </div>
</header>
<main>
