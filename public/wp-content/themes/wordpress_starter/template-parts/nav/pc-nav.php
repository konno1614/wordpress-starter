<nav id="gnav-pc" class="o-nav">
	<ul class="o-nav__list">
		<!-- 固定ページ -->
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">
				<span class="<?php if( is_page('about') || is_singular('member') ) echo "current"; ?>">ABOUT</span>
			</a>
		</li>
		<!-- 固定ページ -->
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/sample' ) ); ?>">
				<span class="<?php if( is_page('sample') || is_singular('member') ) echo "current"; ?>">SAMPLE</span>
			</a>
		</li>
		<!-- 投稿ページ -->
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">
				<span class="<?php if( is_post_type_archive( 'faq' ) || is_singular('faq') ) echo "current"; ?>">FAQ</span>
			</a>
		</li>
	</ul>
</nav>
