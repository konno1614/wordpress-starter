<section class="c-top__section c-top__interview">
	<div class="o-inner">
		<div class="c-top__head c-top__head--white">
			<h2 class="c-top__title">INTERVIEW LIST</h2>
			<a class="c-top__page-link" href="<?= home_url('/interview') ?>">一覧を見る</a>
		</div>
		<ul class="c-top__interview-list">
			<?php
				$args = [
					'post_type'      => 'interview',
					'posts_per_page' => 3
				];
				$posts = get_posts($args);
			?>
			<?php foreach ($posts as $post) : setup_postdata($post); ?>
				<li class="c-top__interview-item">
					<a href="<?= get_permalink($post->ID) ?>">
						<div class="c-top__interview-image">
							<?php
								if(has_post_thumbnail()):
									echo get_the_post_thumbnail($post->ID);
								else:
							?>
								<img src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="インタビューサンプル画像">
							<?php endif; ?>
						</div>
						<div class="c-top__interview-info">
							<?php $terms = get_the_terms($post->ID, 'interview_category');
								foreach ((array)$terms as $term) :
							?>
								<?php if ($term->parent === 0) : ?>
								<p class="c-top__interview-category <?php echo $term->slug; ?>">
									<?php echo $term->name; ?>
								</p>
								<?php endif; ?>
							<?php endforeach; ?>
							<time class="c-interview__time"><?= get_the_date('Y.m.d', $post) ?></time>
						</div>
						<h3 class="c-top__interview-title">
							<span><?= $post->post_title ?></span>
						</h3>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
