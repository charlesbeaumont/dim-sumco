import format from 'date-fns/format'

const selectors = {
  container: '[data-time]'
}

let elements

let timer

const init = () => {
  elements = {
    container: document.querySelector(selectors.container)
  }

  if (!elements.container) return

  setTime()
  timer = setInterval(setTime, 1000)
}

const exit = () => {
  clearInterval(timer)
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
