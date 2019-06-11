<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage sample-wordpress
 * @since 1.0.0
 */

get_header();
?>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content(); ?>

        <?php endwhile; endif; ?>

<?php
get_footer();
