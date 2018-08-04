'use strict'

import '../css/styles.scss'

import { CSSPlugin, AttrPlugin } from 'gsap/all'

import loader from './modules/loader'

if (module.hot) {
  module.hot.accept()
}

const plugins = [CSSPlugin, AttrPlugin]

const loadPage = () => {
  loader.init()
}

document.addEventListener('DOMContentLoaded', loadPage)
