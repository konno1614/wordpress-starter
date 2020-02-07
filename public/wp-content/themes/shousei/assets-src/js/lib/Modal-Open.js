import $ from 'jquery'

$(function () {
  /**
   * modal-open
   */
  $('.modal-open').colorbox({
    iframe: true,
    href: function () {
      return $(this).data('href')
    },
    width: '80%',
    height: '80%'
  })
})
