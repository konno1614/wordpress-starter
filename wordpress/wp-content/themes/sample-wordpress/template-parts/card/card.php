<?php
$args = array(
  'post_type' => 'circle', /* カスタム投稿名が「circle」の場合 */
  'posts_per_page' => 6, /* 表示する数 */
  'post_status' => 'publish',
  'paged' => $paged
); ?>
<?php $my_query = new WP_Query( $args ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<!-- ▽ ループ開始 ▽ -->

<article class="card card--circle col-12 col-sm-6 col-lg-4 mb-2">
    <a href="<?php the_permalink(); ?>" class="card__wrapper">
        <?php
        $circle_img = SCF::get( 'circle_img' );
        $img_path = empty($circle_img[0]) ? get_theme_file_uri('img/common/thumbnail.jpg') : wp_get_attachment_url($circle_img[0]);
        ?>
        <div class="card__img-wrap">
            <div class="card__img" style="background-image: url(<?= $img_path ?>)"></div>
        </div>
        <div class="card__body">
            <?php
                $circle_date = SCF::get( 'circle_date' );
            ?>
            <time class="card__time" datetime="<?php echo date($circle_date); ?>"><?php echo date($circle_date); ?></time>
            <h5 class="card__title"><?php the_title(); ?></h5>
            <?php remove_filter('the_content', 'wpautop'); ?>
            <?php
                $circle_sentence = SCF::get( 'circle_sentence' );
            ?>
            <p class="card__text"><?php echo nl2br($circle_sentence); ?></p>
        </div>
    </a>
</article>

<!-- △ ループ終了 △ -->
<?php endwhile; ?>
