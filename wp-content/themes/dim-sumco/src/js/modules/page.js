
import { TweenMax } from 'gsap/all'

const selectors = {
  page: '[data-page]'
}

let elements

const init = () => {
  elements = {
    page: document.querySelector(selectors.page)
  }
}

const prepare = () => {
  TweenMax.set(elements.page, {
    opacity: 0
  })
}

const enter = () => {
  TweenMax.to(elements.page, 0.7, {
    opacity: 1
  })
}

const exit = () => {
  if (document.body.classList.contains('is-navigation-active')) {
    TweenMax.set(elements.page, {
      opacity: 0
    })
  } else {
    TweenMax.to(elements.page, 0.7, {
      opacity: 0
    })
  }

}

export default {
  init,
  prepare,
  enter,
  exit
}
