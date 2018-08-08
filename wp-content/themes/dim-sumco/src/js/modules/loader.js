import mono from '../mono'

import fonts from './fonts'
import hero from './hero'
import images from './images'
import navigation from './navigation'
import page from './page'
import reveal from './reveal'
import time from './time'
import workGrid from './work-grid'

const components = [hero, navigation, page, reveal, time, workGrid]
const animations = [hero, page]

const selectors = {
  page: '[data-page]'
}

const replacableElements = [selectors.page]

const init = () => {
  mono.start({
    beforeLoading,
    replaceContent
  })

  load()
}

// Exit animations.
const beforeLoading = () => {
  return new Promise((resolve, reject) => {
    animations.forEach(component => {
      component.exit()
    })

    setTimeout(() => {
      navigation.close()
      resolve()
    }, 700)
  })
}

// Updating content and enter animations.
const replaceContent = body => {
  return new Promise((resolve, reject) => {
    replacableElements.forEach(selector => {
      document.querySelector(selector).replaceWith(body.querySelector(selector))
    })

    load()

    resolve()
  })
}

const load = () => {
  // Load interactive components.
  components.forEach(component => {
    component.init()
  })

  // Prepare animations while loading page.
  animations.forEach(component => {
    component.prepare()
  })

  // Animate components after fonts and images are loaded.
  Promise.all([fonts.load(), images.load()])
    .then(values => {
      animations.forEach(animation => {
        animation.enter()
      })
    })
}

export default {
  init,
  load
}
