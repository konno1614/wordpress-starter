import $ from 'jquery'

var first_width = $(window).width()

var timer = false
$(window).resize(function () {
  if (timer !== false) {
    clearTimeout(timer)
  }
  timer = setTimeout(function () {
    // resize完了時の動作
    var width = $(window).width()
    if (width != first_width) {
      console.log('resized')
      fbiframe_reload()
      first_width = width
    }
  }, 200)
})

function fbiframe_reload () {
  // facebookウィジェットの再描画

  var width = $(window).width()

  var src =
    'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPROCLASSpage%2F&tabs=timeline&width=' +
    width +
    '&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId'

  $('#fbiframe').attr('src', '')
  $('#fbiframe').attr('src', src)

  $('#fbiframe').attr('width', width)
}

fbiframe_reload()
