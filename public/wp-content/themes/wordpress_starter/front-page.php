<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

get_header();
?>

<div class="c-top">
	フロントページです。フロントページです。
</div>

<!-- テンプレート読み込み -->
<?php get_template_part('template-parts/nav/pc-nav') ?>

<?php
get_footer();
