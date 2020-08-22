import Vue from 'vue'
import VueRouter from 'vue-router'

import PDFComponent from './components/PDFComponent.vue'
import NewPDFComponent from './components/NewPDFComponent.vue'
import EditPDFComponent from './components/EditPDFComponent.vue'

Vue.use(VueRouter)

export default new VueRouter({
    base: process.env.BASE_URL,
    mode: 'history',
      routes: [
        {
          path: '/',
          name: 'pdf',
          component: PDFComponent
        },
        {
            path: '/added',
            name: 'added',
            component: NewPDFComponent
        },
        {
            path: '/edit/:id',
            name: 'edit',
            component: EditPDFComponent
        }
      ]
    })
