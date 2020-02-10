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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
	<link rel="shortcut icon" href="<?= get_theme_file_uri('img/favicon.ico'); ?>">
	<?php wp_head(); ?>
</head>

<?php
	if ( is_front_page() ) {
		$my_body_class = 'home';
	} elseif (is_singular( 'works' )) {
		$my_body_class = 'works-single';
	} else {
		$my_body_class = 'other';
	}
?>
<body <?php echo ( $my_body_class ) ? ' class="'.$my_body_class.'"' : ''; ?> >
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="o-header">
		<p>ヘッダーです。</p>
		<p>ヘッダーです。</p>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
