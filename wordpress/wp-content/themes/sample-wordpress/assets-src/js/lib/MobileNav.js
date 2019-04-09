import $ from 'jquery'

const MobileNav = {
  isOpened: false,

  open () {
    MobileNav.isOpened = true
    $('.js-mobile-nav-button').attr('aria-expanded', true)
    $('.js-mobile-nav').attr('aria-hidden', false)
  },

  close () {
    MobileNav.isOpened = false
    $('.js-mobile-nav-button').attr('aria-expanded', false)
    $('.js-mobile-nav').attr('aria-hidden', true)
  },

  toggle () {
    if (MobileNav.isOpened) {
      MobileNav.close()
    } else {
      MobileNav.open()
    }
  }
}

export default MobileNav
