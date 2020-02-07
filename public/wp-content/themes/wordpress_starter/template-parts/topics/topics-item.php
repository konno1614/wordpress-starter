<li class="c-top__topics-item">
		<?php $terms = get_the_terms($post->ID, 'topics_category');
			foreach ((array)$terms as $term) : ?>
				<?php if ($term->parent === 0) :
		?>
		<div class="c-top__topics-category <?php echo strtolower($term->slug); ?>">
			<?php echo strtoupper($term->name); ?>
		</div>
		<?php endif; ?>
		<?php endforeach; ?>
	<time class="c-top__topics-time"><?= get_the_date('Y.m.d', $post) ?></time>
	<h3 class="c-top__topics-title">
		<a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title ?></a>
	</h3>
</li>
