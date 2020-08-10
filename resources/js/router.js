import Vue from 'vue'
import VueRouter from 'vue-router'

import PDFComponent from './components/PDFComponent.vue'

Vue.use(VueRouter)

export default new VueRouter({
    base: process.env.BASE_URL,
    mode: 'history',
      routes: [
        {
          path: '/',
          name: 'pdf',
          component: PDFComponent
        }
      ]
    })
