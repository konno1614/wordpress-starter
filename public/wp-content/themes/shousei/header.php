<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shousei
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8618428-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-8618428-5');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
	<link rel="shortcut icon" href="<?= get_theme_file_uri('img/favicon.ico'); ?>">
	<script>
		(function(d) {
			var config = {
			kitId: 'hbs8ufv',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shousei' ); ?></a>

	<header id="masthead" class="o-header">
		<div class="o-header__inner">
			<h1 class="o-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= get_theme_file_uri('img/header/logo_landscape.png'); ?>" alt="将星国際特許事務所"></a>
			</h1>
			<?php get_template_part('template-parts/nav/pc-nav') ?>
			<?php get_template_part('template-parts/nav/sp-nav') ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
