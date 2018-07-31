'use strict'

import '../css/styles.scss'

import navigation from './modules/navigation'
import time from './modules/time'
import workGrid from './modules/work-grid'

if (module.hot) {
  module.hot.accept()
}

const loadPage = () => {
  navigation.init()
  time.init()
  workGrid.init()
}

document.addEventListener('DOMContentLoaded', loadPage)
