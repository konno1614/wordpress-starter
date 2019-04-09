<div class="hero-animation <?= show_hero_animation() ? 'animation' : 'animation-none' ?>">
    <?= get_template_part('template-parts/header/svg-bg-pc'); ?>
    <?= get_template_part('template-parts/header/svg-bg-sp'); ?>
    <div class="hero-animation__bg"></div>
    <div class="hero-animation__mini-clouds js-mini-clouds">
        <div class="mini-cloud mini-cloud-white mini-cloud-l2r" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
        <div class="mini-cloud mini-cloud-gray mini-cloud-l2r" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
        <div class="mini-cloud mini-cloud-stroke mini-cloud-l2r" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
        <div class="mini-cloud mini-cloud-white mini-cloud-r2l" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
        <div class="mini-cloud mini-cloud-gray mini-cloud-r2l" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
        <div class="mini-cloud mini-cloud-stroke mini-cloud-r2l" style="top: <?= rand(30, 90) ?>%; animation-duration: <?= rand(30, 60) ?>s; animation-delay: -<?= rand(0, 60) ?>s;"></div>
    </div>
	<div class="hero-animation__texts js-animation-text">
		<p class="hero-animation__text hero-animation__text--01">わたしのおどろき、広めよう</p>
		<p class="hero-animation__text hero-animation__text--02">週末、鎌倉はクラスになる</p>
		<p class="hero-animation__text hero-animation__text--03">鎌倉にこれまでにない働き方がある？</p>
        <p class="hero-animation__text hero-animation__text--04">ツクル×ツナガル×ツドウ</p>
        <p class="hero-animation__text hero-animation__text--05">2019年まちの大学新開設</p>
	</div>
    <?= get_template_part('template-parts/header/svg-logo'); ?>
</div>
