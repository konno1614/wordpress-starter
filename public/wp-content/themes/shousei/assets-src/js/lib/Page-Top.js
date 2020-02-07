import $ from 'jquery'

$(function () {
  var s = $('.btn-pagetop')
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      s.addClass('fade-in')
    } else {
      s.removeClass('fade-in')
    }
  })
})
