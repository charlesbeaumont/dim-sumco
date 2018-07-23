import { isMobileViewport } from '../utils/checks'

const selectors = {
  background: '[data-work-grid-background]',
  grid: '[data-work-grid]',
  thumbnail: '[data-work-grid-thumbnail]'
}

let elements

const init = () => {
  if (isMobileViewport()) return

  elements = {
    background: document.querySelector(selectors.background),
    grid: document.querySelector(selectors.grid),
    thumbnails: document.querySelectorAll(selectors.thumbnail)
  }

  if (!elements.grid) return

  Array.from(elements.thumbnails).forEach(element => {
    element.addEventListener('mousemove', positionBackground)
    element.addEventListener('mouseenter', showBackground)
    element.addEventListener('mouseleave', hideBackground)
  })
}

const positionBackground = event => {
  let grid = elements.grid.getBoundingClientRect()
  let link = event.target.getBoundingClientRect()

  let x = Math.round(event.clientX - grid.left) + 'px'
  let y = Math.round(event.clientY - grid.top) + 'px'

  elements.background.style.transform = 'translate(' + x + ', ' + y + ')'
}

const showBackground = event => {
  let url = event.target.getAttribute('data-work-grid-thumbnail')
  elements.background.style.backgroundImage = `url('${url}')`
  elements.background.style.opacity = 1
}

const hideBackground = event => {
  elements.background.style.opacity = 0
}

export default {
  init
}
