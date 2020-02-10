import $ from 'jquery'
$(function () {
  /**
   * spナビゲーション
   */
  $('.js-toggle-nav').on('click', function () {
    $('.js-toggle-nav').toggleClass('is_active')
    $('.o-side-bar__hidden').toggleClass('is_active')
    $('.o-nav-sp').toggleClass('is_active')
  })
})
