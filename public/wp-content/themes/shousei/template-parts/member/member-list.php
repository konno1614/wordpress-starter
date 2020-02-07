<div class="c-member">
	<h3>MEMBER</h3>
	<?php if (have_posts()) : ?>
		<ul class="c-member__list">
			<?php
				$args = [
					'post_type'      => 'member',
					'posts_per_page' => -1
				];
				$posts = get_posts($args) ?>
				<?php foreach ($posts as $post) :
			?>
			<li class="c-member__item">
				<div class="c-member__thumbnail">
					<?php
						if(has_post_thumbnail()):
							echo get_the_post_thumbnail($post->ID);
						else:
					?>
						<img src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="メンバーサンプル画像">
					<?php endif; ?>
				</div>
				<h4 class="c-member__name">
					<span>
					<?php if( get_post_meta($post->ID, 'shousei_list_qualification', true)): ?>
						<?= get_post_meta($post->ID, 'shousei_list_qualification', true) ?>：
					<?php endif; ?>
					</span>
					<span>
						<?= $post->post_title ?>
					</span>
					<span class="position">
					<?php if( get_post_meta($post->ID, 'shousei_list_position', true)): ?>
						（<?= get_post_meta($post->ID, 'shousei_list_position', true) ?>）
					<?php endif; ?>
					</span>
				</h4>
				<p class="c-member__link">
					<a href="<?= get_permalink($post->ID) ?>">詳しいプロフィールを見る</a>
				</p>
			</li>
			<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<p>INTERVIEW LISTはありません。</p>
	<?php endif; ?>
</div>
