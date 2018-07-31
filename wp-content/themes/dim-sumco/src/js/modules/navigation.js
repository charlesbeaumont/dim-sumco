
const selectors = {
  toggle: '[data-navigation-toggle]',
  wrapper: '[data-navigation]'
}

let elements

let state = {
  isActive: false
}

const init = () => {
  elements = {
    toggle: document.querySelector(selectors.toggle),
    wrapper: document.querySelector(selectors.wrapper)
  }

  if (!elements.toggle) return

  elements.toggle.addEventListener('click', toggleNavigation)
}

const toggleNavigation = () => {
  if (state.isActive) {
    document.body.classList.remove('is-navigation-active')
  } else {
    document.body.classList.add('is-navigation-active')
  }

  state.isActive = !state.isActive
}

export default {
  init
}
