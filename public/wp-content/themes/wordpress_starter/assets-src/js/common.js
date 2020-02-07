import $ from 'jquery'
import './lib/Mobile-Nav'
import './lib/Page-Top'
import './lib/Slider'

window.addEventListener('load', () => {
	/**
	 * smooth scroll
	 */
	$('a[href^="#"]').on(
		'click',
		/* @this HTMLElement */
		function (e) {
			e.preventDefault()
			const href = $(this).attr('href')
			const target = $(href === '#' || href === '' ? 'html' : href)
			const offset = target.offset()
			if (!offset) return

			let scrollTop = offset.top - 0
			$('body,html').animate({
				scrollTop
			}, 400, 'swing')
			return true
		}
	)

	/**
	 * ページネーションのクラス削除
	 */
	$(".prev").removeClass("page-numbers");
	$(".next").removeClass("page-numbers");


})
