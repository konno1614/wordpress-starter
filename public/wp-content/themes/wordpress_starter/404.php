<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package starter
 */

get_header();
?>

<section class="o-section c-404">
	<p class="c-404__lead">お探しのURLは存在しません。</p>
	 <p class="c-404__back"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">&lt; トップページへ戻る</a></p>
</section>

<?php
get_footer();
