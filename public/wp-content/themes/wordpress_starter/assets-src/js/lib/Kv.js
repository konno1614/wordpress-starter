import $ from 'jquery'

$(function () {
  /**
   * Cの画像切り替え
   */
  var count = setInterval(changeImg, 5000)
  var i = 1

  function changeImg () {
    $('#mylink').attr(
      'href',
      '/wp-content/themes/wordpress_starter/img/common/background-sample0' +
        i +
        '.jpg'
    )
    if (i <= 2) {
      i++
    } else {
      i = 1
    }
  }

  /**
   * 背景画像切り替え
   */
  // $('.c-sample__bg-image').bgSwitcher({
  //     images: [
  //         '/wp-content/themes/wordpress_starter/img/common/background-sample01.jpg',
  //         '/wp-content/themes/wordpress_starter/img/common/background-sample02.jpg',
  //         '/wp-content/themes/wordpress_starter/img/common/background-sample03.jpg'
  //     ],
  //     interval: 5000,
  //     loop: true
  // });
})
