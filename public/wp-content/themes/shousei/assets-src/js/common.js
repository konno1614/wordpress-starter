import $ from 'jquery'
import './lib/PC-Nav'
import './lib/Mobile-Nav'
import './lib/Page-Top'
import './lib/Modal-Open'
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
	 * .o-contact-button 下スクロールで表示
	 */
	$(function(){
		var pos = 0;
		var fixed_button = $('.o-contact-button');

		$(window).on('scroll', function(){
			if($(this).scrollTop() < pos || $(this).scrollTop() < 500){
				//上スクロール時の処理
				fixed_button.removeClass('showClass');
			}else{
				//下スクロール時の処理
				fixed_button.addClass('showClass');
			}
			pos = $(this).scrollTop();
		});
	});

	/**
	 * ページネーションのクラス削除
	 */
	$(".prev").removeClass("page-numbers");
	$(".next").removeClass("page-numbers");

	/**
	 * カテゴリー絞り込み
	 */


})
