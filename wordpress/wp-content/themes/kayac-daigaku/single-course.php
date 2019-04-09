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
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="o-inner course-detail">
                    <h3 class="title-02"><?php the_title(); ?></h3>
                    <div class="course-detail__flex">
                        <div class="course-detail__flex--left">
                            <?php $course_catchcopy = SCF::get( 'course_catchcopy' ); ?>
                            <h4 class="course-detail__catch-copy"><?php echo $course_catchcopy; ?></h4>
                            <?php $course_text = SCF::get( 'course_text' ); ?>
                            <p class="course-detail__text"><?php echo nl2br($course_text); ?></p>
                        </div>
                        <div class="course-detail__flex--right">
                            <table class="course-detail__table">
                                <tr>
                                    <th>講師</th>
                                    <?php $course_lecturer = SCF::get( 'course_lecturer' ); ?>
                                    <td><?php echo $course_lecturer; ?></td>
                                </tr>
                                <tr>
                                    <th>日程</th>
                                    <?php $course_schedule = SCF::get( 'course_schedule' ); ?>
                                    <td><?php echo $course_schedule; ?></td>
                                </tr>
                                <tr>
                                    <th>場所</th>
                                    <?php $course_place = SCF::get( 'course_place' ); ?>
                                    <td><?php echo nl2br($course_place); ?></td>
                                </tr>
                                <tr>
                                    <th>学費等</th>
                                    <?php $course_cost = SCF::get( 'course_cost' ); ?>
                                    <td><?php echo nl2br($course_cost); ?></td>
                                </tr>
                                <tr>
                                    <th>定員</th>
                                    <?php $course_capacity = SCF::get( 'course_capacity' ); ?>
                                    <td><?php echo $course_capacity; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="text-center position-relative mt-2">
                        <a href="#" class="c-button c-button--rounded c-button--purple c-button--right">申し込みする</a>
                    </div>
                    <div class="o-inner--720">
                        <div class="course-detail__slider">
                            <?php get_template_part('template-parts/slider/slider-course-detail') ?>
                        </div>
                        <?php $course_slidertext = SCF::get( 'course_slidertext' ); ?>
                        <p class="course-detail__slider-text"><?php echo nl2br($course_slidertext); ?></p>
                        <h5 class="course-detail__schedule"><?php the_title(); ?>講座のスケジュール日程</h5>
                        <?php
                            $course_contents = SCF::get('course_contents');
                            foreach ($course_contents as $field_name => $field_value ) { ?>
                        <div class="course-detail__contents">
                            <?php $course_contentsdate = SCF::get( 'course_contentsdate' ); ?>
                            <p class="course-detail__contents-date"><?php echo $field_value['course_contentsdate']; ?></p>
                            <div class="course-detail__flex-point">
                                <time class="course-detail__contents-time"><?php echo $field_value['course_contentstime']; ?></time>
                                <p class="course-detail__contents-place"><?php echo $field_value['course_contentsplace']; ?></p>
                            </div>
                            <h5 class="course-detail__contents-title"><?php echo $field_value['course_contentstitle']; ?></h5>
                            <p class="course-detail__contents-text"><?php echo nl2br($field_value['course_contentstext']); ?></p>
                        </div>
                        <?php } ?>
                        <div class="text-center position-relative mt-2">
                            <a href="#" class="c-button c-button--rounded c-button--purple c-button--right">申し込みする</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
