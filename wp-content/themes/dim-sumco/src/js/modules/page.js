
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
  TweenMax.to(elements.page, 1, {
    opacity: 1
  })
}

const exit = () => {
  TweenMax.to(elements.page, 1, {
    opacity: 0
  })
}

export default {
  init,
  prepare,
  enter,
  exit
}
