<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="o-header js-header <?= show_hero_animation() ? '' : 'visible' ?>">
    <div class="o-header__inner">
        <h1 class="o-header__logo">
            <a href="<?= home_url() ?>">
                <picture>
                    <source srcset="<?= get_theme_file_uri('img/header/logo_sp@2x.png'); ?>" media="(max-width: 750px)">
                    <img src="<?= get_theme_file_uri('img/header/logo.png'); ?>" alt="まちの大学　KAMAKURA">
                </picture>
            </a>
        </h1>
        <nav class="o-header__nav">
            <ul class="o-header__nav-lists">
                <li <?php if(is_page('about')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('about') ?>">まちの大学について</a></li>
                <li <?php if(is_page('course')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('course') ?>">学部案内</a></li>
                <li <?php if(is_page('circle')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('circle') ?>">サークル活動</a></li>
                <li <?php if(is_page('news')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('news') ?>">お知らせ</a></li>
                <li <?php if(is_page('report')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('report') ?>">活動レポート</a></li>
                <li <?php if(is_page('question')) : ?> class="o-header__nav-list current"<?php endif;?> class="o-header__nav-list"><a class="o-header__nav-item" href="<?= home_url('contact/#question') ?>">よくある質問</a></li>
            </ul>
        </nav>
        <div class="o-header__col o-header__col--links">
            <button class="o-header__button js-mobile-nav-button" aria-controls="mobile-nav" aria-expanded="false">
                <span class="o-header__button--bar o-header__button--bar01"></span>
                <span class="o-header__button--bar o-header__button--bar02"></span>
                <span class="o-header__button--bar o-header__button--bar03"></span>
            </button>
        </div>
    </div>
</header>

<?php get_template_part('template-parts/header/mobile-nav') ?>

<?php get_template_part('template-parts/header/guide-icon') ?>



<!-- アニメーションをfront-pageにだけ表示 -->
<?php if ( is_front_page() ) : ?>

<?php get_template_part('template-parts/header/hero-animation') ?>

<?php else : ?>

<?php get_template_part('template-parts/header/hero') ?>

<?php endif; ?>

<main id="main" class="o-main">
