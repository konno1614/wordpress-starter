<nav id="gnav-pc" class="o-nav">
	<ul class="o-nav__list">
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/trademark' ) ); ?>">
				<span class="<?php if( is_page('trademark') ) echo "current"; ?>">商標</span>
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/patent' ) ); ?>">
				<span class="<?php if( is_page('patent') ) echo "current"; ?>">特許</span>
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/interview' ) ); ?>">
				<span class="<?php if( is_post_type_archive( 'interview' ) || is_singular('interview') ) echo "current"; ?>">お客様の声</span>
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/works' ) ); ?>">
				<span class="<?php if( is_post_type_archive( 'works' ) || is_singular('works') ) echo "current"; ?>">商標実績</span>
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/mission' ) ); ?>">
				理念
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">
				<span class="<?php if( is_page('about') || is_singular('member') ) echo "current"; ?>">事務所案内</span>
			</a>
		</li>
		<li class="o-nav__item">
			<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">
				<span class="<?php if( is_post_type_archive( 'faq' ) || is_singular('faq') ) echo "current"; ?>">FAQ</span>
			</a>
		</li>
	</ul>
</nav>
