<article class="card card--course col-12 col-sm-6 col-lg-4 mb-2">
    <a href="<?php the_permalink(); ?>" class="card__wrapper">
        <?php
        $course_img = SCF::get( 'course_img' );
        $img_path = empty($course_img[0]) ? get_theme_file_uri('img/common/thumbnail.jpg') : wp_get_attachment_url($course_img[0]);
        ?>
        <div class="card__img-wrap">
            <div class="card__img" style="background-image: url(<?= $img_path ?>)"></div>
        </div>
        <div class="card__body">
            <h5 class="card__title"><?php the_title(); ?></h5>
            <?php $course_text = SCF::get( 'course_text' ); ?>
            <p class="card__text"><?php echo nl2br($course_text); ?></p>
        </div>
    </a>
</article>
