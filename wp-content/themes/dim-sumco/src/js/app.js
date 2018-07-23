'use strict'

import '../css/styles.scss'

import time from './modules/time'
import workGrid from './modules/work-grid'

if (module.hot) {
  module.hot.accept()
}

const loadPage = () => {
  time.init()
  workGrid.init()
}

document.addEventListener('DOMContentLoaded', loadPage)
