<div class="swiper-container swiper-container--course-detail">
    <div class="swiper-wrapper">
        <?php
        $course_slider = SCF::get('course_slider');
        foreach ((array)$course_slider as $field_name => $field_value ) {
            $course_img = wp_get_attachment_image_src($field_value['course_img'],'full');
            $course_img_url = esc_url($course_img[0]);
            ?>
            <?php if (!empty($course_img_url)): ?>
                <div class="swiper-slide"><img src="<?php echo $course_img_url; ?>"></div>
            <?php else: ?>
                <div class="swiper-slide swiper-slide-course-detail"><img src="<?php echo get_theme_file_uri('img/common/thumbnail_720x350.jpg'); ?>" alt=""></div>
            <?php endif; ?>
            <?php
        }
        ?>
    </div>
<div class="swiper-pagination"></div>
</div>
