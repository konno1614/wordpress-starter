<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
the_post();
?>

    <section id="primary" class="content-area">
        <main id="main" class="circle-detail">
            <div class="o-inner--720">
                <div class="circle-detail__top-area circle-detail__block">
                    <div class="circle-detail__time">
                        <?php $circle_date = SCF::get( 'circle_date' ); ?>
                        <time datetime="<?php echo date($circle_date); ?>"><span class="circle-detail__green"><?php echo date($circle_date); ?></span></time>
                    </div>
                    <?php $circle_catchcopy = SCF::get( 'circle_catchcopy' ); ?>
                    <h3 class="circle-detail__sub-title"><?php echo $circle_catchcopy; ?></h3>
                    <?php $circle_sentence = SCF::get( 'circle_sentence' ); ?>
                    <p class="circle-detail__paragraph"><?php echo nl2br($circle_sentence); ?></p>
                </div>
                <div class="circle-detail__slider-area circle-detail__block">
                    <?php get_template_part('template-parts/slider/slider-circle') ?>
                </div>
                <div class="circle-detail__schedule-area circle-detail__block">
                    <h4 class="circle-detail__schedule"><?php the_title(); ?>サークルのスケジュール日程</h4>
                    <?php
                        $circle_schedule = SCF::get('circle_schedule');
                        foreach ($circle_schedule as $field_name => $field_value ) {
                    ?>
                        <div class="circle-detail__contents">
                            <div class="circle-detail__flex">
                                <time class="circle-detail__flex--left"><?php echo $field_value['circle_time']; ?></time>
                                <p class="circle-detail__flex--right"><?php echo $field_value['circle_place']; ?></p>
                            </div>
                            <h5 class="circle-detail__contents-title"><?php echo $field_value['circle_scheduletitle']; ?></h5>
                            <p class="circle-detail__contnts-paragraph"><?php echo nl2br($field_value['circle_contents']); ?></p>
                        </div>
                    <?php } ?>
                    <div class="circle-detail__tag-area">
                        <p class="circle-detail__tag">タグ：</p>
                        <ul class="circle-detail__tag-list">
                            <?php
                            the_terms(
                                $post->ID,
                                'circle_cat',
                                '<li class="circle-detail__tag-type">',
                                '</li><li class="circle-detail__tag-type">',
                                '</li>'
                            ); ?>
                            <?php
                            the_terms(
                                $post->ID,
                                'circle_tag',
                                '<li class="circle-detail__tag-type">',
                                '</li><li class="circle-detail__tag-type">',
                                '</li>'
                            ); ?>
                        </ul>
                    </div>
                </div>
                <div class="circle-detail__overview circle-detail__block">
                    <h3 class="circle-detail__sub-title"><span class="circle-detail__green">サ</span>ークル概要</h3>
                    <div class="circle-detail__table--wrapper">
                        <table class="circle-detail__table">
                            <tr>
                            <?php
                                $circle_director = SCF::get( 'circle_director' );
                            ?>
                                <th>部長</th>
                                <td><?php echo $circle_director; ?></td>
                            </tr>
                            <tr>
                            <?php
                                $circle_activityplace = SCF::get( 'circle_activityplace' );
                            ?>
                                <th>場所</th>
                                <td><?php echo $circle_activityplace; ?></td>
                            </tr>
                            <tr>
                            <?php
                                $circle_belongings = SCF::get( 'circle_belongings' );
                            ?>
                                <th>必要な持ち物</th>
                                <td><?php echo $circle_belongings; ?></td>
                            </tr>
                            <tr>
                            <?php
                                $circle_contact = SCF::get( 'circle_contact' );
                            ?>
                                <th>連絡先</th>
                                <td><?php echo $circle_contact; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center position-relative mt-2">
                        <a href="<?= home_url('circle') ?>" class="c-button c-button--rounded c-button--left">一覧へ戻る</a>
                    </div>
                </div>
            </div>
            <?php
            $circle_relations = SCF::get('circle_relations');
            if ( !empty($circle_relations) ) : ?>
            <div class="o-inner">
                <div class="circle-detail__activities-area circle-detail__block">
                    <h3 class="circle-detail__sub-title"><span class="circle-detail__green">関</span>連する活動</h3>
                    <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'circle',
                            'post_status' => 'publish',
                            'post__in' => $circle_relations,
                            'ignore_sticky_posts' => true
                        );
                        $circle_relations_query = new WP_Query( $args );
                        if ( $circle_relations_query->have_posts() ) {
                            while ( $circle_relations_query->have_posts() ) {
                                $circle_relations_query->the_post();
                                echo '<div class="col-12 col-sm-6 col-lg-4 mb-2">';
                                get_template_part('template-parts/card/card', 'tag');
                                echo '</div>';
                            }
                            wp_reset_postdata();
                        }
                    ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
