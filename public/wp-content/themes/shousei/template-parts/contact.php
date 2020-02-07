<section id="contact" class="c-contact">
	<div class="o-inner o-inner--narrow">
		<h2 class="c-top__title c-top__title--center">CONTACT</h2>
		<p class="c-contact__text">
			弁理士は、職務上知り得たお客様の秘密を守る義務があります。<br>
			当サイトからお問い合わせいただいた情報は、秘密として厳重に取り扱い、無断で開示したりすることはございません。<br>
			弁理士の守秘義務については、弁理士法第30条及び第80条をご参照ください。
		</p>
		<div class="c-contact__form">
			<?php if (defined('FORM_CONTACT_ID')) : ?>
				<?php echo do_shortcode('[caldera_form id="' . FORM_CONTACT_ID . '"]'); ?>
			<?php endif; ?>
		</div>
		<div class="c-contact__info">
			<p>お電話でのお問い合わせ</p>
			<a class="tel" href="tel:0467738540">
				0467-73-8540
			</a>
			<p>電話受付時間:平日10:00 ~ 16:00</p>
			<p>定休日:土・日・年末年始</p>
		</div>
	</div>
</section>
