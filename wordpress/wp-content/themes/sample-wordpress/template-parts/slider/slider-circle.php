<div class="swiper-container swiper-container--course-circle">
    <div class="swiper-wrapper">
        <?php
        $circle_slider = SCF::get('circle_slider');
        foreach ($circle_slider as $field_name => $field_value ) {
            $circle_img = wp_get_attachment_image_src($field_value['circle_img'],'full');
            $circle_img_url = esc_url($circle_img[0]);
            ?>
            <?php if (!empty($circle_img_url)): ?>
                <div class="swiper-slide"><img src="<?php echo $circle_img_url; ?>"></div>
            <?php else: ?>
                <div class="swiper-slide swiper-slide-circle"><img src="<?php echo get_theme_file_uri('img/common/thumbnail_720x350.jpg'); ?>"></div>
            <?php endif; ?>
            <?php
        }
        ?>
    </div>
<div class="swiper-pagination"></div>
</div>
