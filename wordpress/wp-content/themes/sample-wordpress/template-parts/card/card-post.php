<article class="card card--news col-12 col-sm-6 col-lg-4 mb-2">
    <a href="<?php the_permalink(); ?>" class="card__wrapper">
        <?php
            $days = 7;
            $today = date_i18n('U');
            $entry_day = get_the_time('U');
            $keika = date('U',($today - $entry_day)) / 86400;
        ?>
        <?php if ( $days > $keika ) : ?>
        <picture>
            <source srcset="<?= get_theme_file_uri('img/icon/new@2x.png') ?> 2x">
            <img class="card__new" src="<?= get_theme_file_uri('img/icon/new.png') ?>" alt="new" width="97" height="71">
        </picture>
        <?php endif; ?>
        <?php
        $news_img = SCF::get( 'news_img' );
        $img_path = empty($news_img) ? get_theme_file_uri('img/common/thumbnail.jpg') : wp_get_attachment_url($news_img);
        ?>
        <div class="card__img-wrap">
            <div class="card__img" style="background-image: url(<?= $img_path ?>)"></div>
        </div>
        <div class="card__body">
            <time class="card__time" datetime="<?= the_time('Y-m-d') ?>"><?= the_time('Y-m-d') ?></time>
            <h5 class="card__title card__title--news"><?= the_title() ?></h5>
        </div>
    </a>
</article>
