import $ from 'jquery'
import anime from 'animejs'

const Logo = {
  MASK_POINTS: {
    init: '213.3435,225.039 185,-10 245,-10 213.3435,225.039',
    start: '213.3435,248.039 185,-10 245,-10 213.3435,248.039',
    end: '213.3435,248.039 -230,-10 656.687,-10 213.3435,248.039'
  },

  show () {
    $('.js-animation-logo').addClass('show')
  },

  open () {
    anime({
      targets: '.js-animation-logo-mask',
      points: [
        Logo.MASK_POINTS.init,
        // スタート時に下部頂点をずらしておくことで、波をうたないようにする
        { value: Logo.MASK_POINTS.start, duration: 0 },
        Logo.MASK_POINTS.end
      ],
      easing: 'easeOutQuad',
      duration: 1000,
      autoplay: true
    })
  },

  scaleup () {
    $('.js-animation-logo').addClass('scaleup')
  }
}

const Texts = {
  selectors: [
    '.hero-animation__text--01',
    '.hero-animation__text--02',
    '.hero-animation__text--03',
    '.hero-animation__text--04'
  ],

  /**
   * エレメントを渡すと、文字を1文字つづspanタグで囲ってくれる
   * @params el
   */
  splitText (el) {
    // テキスト抽出
    const text = el.textContent
    // 中身削除
    el.innerHTML = ''
    // 1文字つづspanに包む
    const span = document.createElement('span')
    text.split('').forEach(str => {
      const cloneSpan = span.cloneNode()
      cloneSpan.textContent = str
      // spanをappendしていく
      el.appendChild(cloneSpan)
    })
  },

  init () {
    $('.hero-animation__text').each((i, el) => {
      Texts.splitText(el)
    })
  },

  show () {
    $('.js-animation-text').addClass('show')
    anime({
      targets: '.hero-animation__text span',
      delay: (el, i) => i * 80,
      opacity: 1,
      duration: 5000,
      autoplay: true
    })
  }
}

const SVGBg = {
  show () {
    $('.js-svg-bg').addClass('show')
  }
}

const MiniClouds = {
  show () {
    $('.js-mini-clouds').addClass('show')
  }
}

const Header = {
  show () {
    $('.js-header').addClass('visible')
    $('.js-fixed-guide').addClass('visible')
  }
}

$('body').addClass('lock')
Logo.show()
window.addEventListener('load', () => {
  Texts.init()

  const timeline = anime.timeline({
    duration: 0
  })
  // timeline.add({
  //   begin: Logo.show,
  //   duration: 500
  // })
  timeline.add({
    begin: Logo.open,
    duration: 900
  })
  timeline.add({
    begin: Logo.scaleup,
    duration: 400
  })
  timeline.add({
    begin: SVGBg.show,
    duration: 300
  })
  timeline.add({
    begin: MiniClouds.show,
    duration: 1000
  })
  timeline.add({
    complete: Header.show,
    duration: 0
  })
  timeline.add({
    complete: Texts.show,
    duration: 0
  })
  timeline.add({
    complete () {
      $('body').removeClass('lock')
    },
    duration: 0
  })
})
