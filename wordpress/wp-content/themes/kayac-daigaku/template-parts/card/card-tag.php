<article class="card card--circle-detail">
    <a href="<?php the_permalink(); ?>" class="card__wrapper">
        <?php
        $circle_img = SCF::get( 'circle_img' );
        $img_path = empty($circle_img[0]) ? get_theme_file_uri('img/common/thumbnail.jpg') : wp_get_attachment_url($circle_img[0]);
        ?>
        <div class="card__img-wrap">
            <div class="card__img" style="background-image: url(<?= $img_path ?>)"></div>
        </div>
        <div class="card__body">
            <h5 class="card__title"><?php the_title(); ?></h5>
            <?php $circle_sentence = SCF::get( 'circle_sentence' ); ?>
            <p class="card__text"><?php echo nl2br($circle_sentence); ?></p>
        </div>
    </a>
    <ul class="card__tag-list">
        <?php
        the_terms(
            $post->ID,
            'circle_cat',
            '<li class="card__tag-type">',
            '</li><li class="card__tag-type">',
            '</li>'
        ); ?>
        <?php
        the_terms(
            $post->ID,
            'circle_tag',
            '<li class="card__tag-type">',
            '</li><li class="card__tag-type">',
            '</li>'
        ); ?>
    </ul>
</article>
