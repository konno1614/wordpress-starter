<?php
	$object = get_queried_object();
	$slug = null;
	if (is_archive()) :
		$slug = $object->slug;
	elseif (is_single()) :
		$categories = get_the_terms( $id, 'interview_category');
		if ($categories !== false) :
			$slug = $categories[0]->slug;
		endif;
	endif;
?>
<div class="c-interview__category-area">
	<ul class="c-interview__category-list">
		<li class="c-interview__category-item <?= $slug === null ? 'c-interview__category-item--current' : '' ?> c-interview__category-item--all"><a href="<?= home_url('interview') ?>">すべて</a></li>
		<?php
		$terms = get_terms('interview_category');
		foreach ($terms as $term) {
			$term_link = get_term_link($term);
			if (is_wp_error($term_link)) :
				continue;
			endif;
			$is_current = $slug === $term->slug;
			echo '<li class="c-interview__category-item ' . ($is_current ? 'c-interview__category-item--current' : '') . '"><a href="' . esc_url($term_link) . '">' . $term->name . '</a></span>';
		}
		?>
	</ul>
</div>
