<li class="c-interview__item">
	<a href="<?= get_permalink($post->ID) ?>">
		<div class="c-interview__thumbnail">
			<?php
				if(has_post_thumbnail()):
					echo get_the_post_thumbnail($post->ID);
				else:
			?>
				<img src="<?= get_theme_file_uri('img/common/eye-catch.png'); ?>" alt="インタビューサンプル画像">
			<?php endif; ?>
		</div>
		<div class="c-interview__info">
			<?php $terms = get_the_terms($post->ID, 'interview_category');
				foreach ((array)$terms as $term) : ?>
					<?php if ($term->parent === 0) :
			?>
			<p class="c-interview__category <?php echo $term->slug; ?>">
				<?php echo $term->name; ?>
			</p>
			<?php endif; ?>
			<?php endforeach; ?>
			<time class="c-top__interview-time"><?= get_the_date('Y.m.d', $post) ?></time>
		</div>
		<h4 class="c-interview__post-title">
			<span><?= $post->post_title ?></span>
		</h4>
	</a>
</li>
