/**
 * @returns {boolean}
 */
export function isHome () {
  return document.querySelector('body.home')
}

/**
 * @return {boolean}
 */
export function isMobileStyle () {
  return window.matchMedia('(max-width: 749.98px)').matches
}

/**
 * @param {number} min
 * @param {number} max
 * @returns {number}
 */
export function random (min = 0, max = 1) {
  return Math.random() * (max - min) + min
}

/**
 * @param {string} path
 * @returns {string}
 */
export function getThemeFileUri (path) {
  return `${kenchoji.theme_dir}/${path}`
}
