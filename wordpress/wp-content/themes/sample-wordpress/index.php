<?php
/**
 * @package WordPress
 */

get_header();
?>

<div class="o-inner news">
    <h3 class="title-02"><span class="news__green">お</span>知らせ・ニュース</h3>
    <div class="row m-0 js-card-wrapper">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/card/card', 'post') ?>
        <?php endwhile ?>
    </div>
    <?php if ( get_next_posts_link() ) : ?>
    <div class="text-center position-relative mt-2 js-button-wrapper">
        <button class="c-button c-button--rounded c-button--down js-more-button" data-type="post" data-page="2" data-target="js-card-wrapper">more</button>
    </div>
    <?php endif ; ?>
</div>

<?php
get_footer();
