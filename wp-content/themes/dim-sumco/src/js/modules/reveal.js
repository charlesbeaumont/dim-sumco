import ScrollReveal from 'scrollreveal'

const selectors = {
  element: '[data-reveal]'
}

const init = () => {
  ScrollReveal().reveal(selectors.element, {
    opacity: 0,
    easing: 'cubic-bezier(0.23, 1, 0.32, 1)',
    duration: 1500,
    delay: 400
  })
}

export default {
  init
}
