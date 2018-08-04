
import imagesLoaded from 'imagesloaded'

const selectors = {
  image: '[data-preload-image]'
}

let elements = {}

const load = () => {
  elements = {
    images: document.querySelectorAll(selectors.image)
  }

  return new Promise((resolve, reject) => {
    let preloader = imagesLoaded(elements.images, { background: true })

    preloader.on('always', () => {
      resolve()
    })
  })
}

export default {
  load
}
