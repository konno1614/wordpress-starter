<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    <div class="o-inner news">
        <p class="text-center">お探しのページが見つかりませんでした。</p>
        <div class="text-center position-relative mt-2">
            <a href="<?= home_url() ?>" class="c-button c-button--rounded c-button--left">HOME</a>
        </div>
    </div>
<?php
get_footer();
