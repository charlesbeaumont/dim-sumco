import format from 'date-fns/format'

const selectors = {
  container: '[data-time]'
}

let elements

const init = () => {
  elements = {
    container: document.querySelector(selectors.container)
  }

  if (!elements.container) return

  setTime()
  setInterval(setTime, 1000)
}

const setTime = () => {
  elements.container.innerHTML = format(
    new Date(),
    'dddd, DD MMMM YYYY HH:mm:ss'
  )
}

export default {
  init
}
