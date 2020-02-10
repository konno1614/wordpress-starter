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

<div class="c-sample">
	<div class="c-sample__bg-image"></div>
	<svg class="c-sample__blob-cont">
		<image
			xlink:href="<?= get_theme_file_uri('img/common/background-sample.jpg'); ?>"
			mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
		<defs>
			<filter id="gooey" height="130%" >
				<feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
			</filter>
		</defs>
		<mask id="mask" x="0" y="0">
			<g>
				<polygon class="HeroText" points="604.51 285.54 521.51 67.54 244.51 0.54 19.51 155.54 0.51 361.54 81.51 560.54 278.51 668.54 475.51 641.54 591.51 575.54 604.51 409.54 496.51 411.54 420.51 531.54 294.51 559.54 163.06 475.26 108.51 364.54 131.51 200.54 258.51 104.54 437.51 128.54 487.51 279.54 604.51 285.54" />
			</g>
		</mask>
	</svg>
</div>



<?php
get_footer();
