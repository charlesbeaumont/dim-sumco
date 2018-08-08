
import { TweenMax, Power4, Expo } from 'gsap/all'

const selectors = {
  background: '[data-hero-background]',
  content: '[data-hero-content]',
  hero: '[data-hero]'
}

let elements

const init = () => {
  elements = {
    background: document.querySelector(selectors.background),
    content: document.querySelector(selectors.content),
    hero: document.querySelector(selectors.hero)
  }
}

const prepare = () => {
  if (!elements.hero) return

  if (elements.content) {
    TweenMax.set(elements.content, {
      opacity: 0
    })
  }

  if (elements.background) {
    TweenMax.set(elements.background, {
      opacity: 0
    })
  }
}

const enter = () => {
  if (!elements.hero) return

  if (elements.content) {
    TweenMax.to(elements.content, 1, {
      opacity: 1,
      ease: Power4.easeIn,
      delay: 0.2
    }, 0.3)
  }

  if (elements.background) {
    TweenMax.fromTo(elements.background, 3, {
      opacity: 0,
      scale: 1.05
    }, {
      opacity: 1,
      scale: 1,
      ease: Expo.easeOut
    })
  }
}

const exit = () => {
}

export default {
  init,
  prepare,
  enter,
  exit
}
