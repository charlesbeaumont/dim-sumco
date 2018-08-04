
import WebfontLoader from 'webfontloader'

const load = () => {
  return new Promise((resolve, reject) => {
    WebfontLoader.load({
      active: () => {
        resolve()
      },
      typekit: {
        id: 'ycg4nwg'
      }
    })
  })
}

export default {
  load
}
