import $ from 'jquery'
import './lib/Sns'
import './lib/More-Button'
import './lib/Slider'
import MobileNav from './lib/MobileNav';

window.addEventListener('load', () => {
  /**
   * smooth scroll
   */
  $('a[href^="#"]').on(
    'click',
    /* @this HTMLElement */ function (e) {
      e.preventDefault()
      const href = $(this).attr('href')
      const target = $(href === '#' || href === '' ? 'html' : href)
      const offset = target.offset()
      if (!offset) return

      let scrollTop = offset.top -50;
      $('body,html').animate({ scrollTop }, 400, 'swing')
      return true
    }
  )

  /**
   * ナビアコーディオン
   */
  $('.js-nav-ac-button').on('click', function (e) {
    e.stopPropagation()
    const $this = $(this)
    $this.toggleClass('open')
    $this
      .parent()
      .find('.js-nav-ac')
      .slideToggle(200)
  })

  /**
   * モバイルナビ開閉
   */
  $('.js-mobile-nav-button').click(function() {
    MobileNav.toggle()
  })

  $('.js-mobile-nav').on('click', 'a[href^="#"]', (e) => {
    e.preventDefault()
    MobileNav.close()
  })
})
