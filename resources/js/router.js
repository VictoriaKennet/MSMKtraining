import Vue from 'vue'
import VueRouter from 'vue-router'

import PDFComponent from './components/DocumentsWelderQualification/PDFComponent.vue'
import NewPDFComponent from './components/DocumentsWelderQualification/NewPDFComponent.vue'
import EditPDFComponent from './components/DocumentsWelderQualification/EditPDFComponent.vue'
import ClientsComponent from './components/DocumentsWelderQualification/ClientsComponent.vue'
import ErrorComponent from './components/DocumentsWelderQualification/ErrorComponent.vue'
import PDFWeldingProcedure from './components/DocumentsWeldingProcedure/PDFWeldingProcedure.vue'

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
              path: '/doc1',
              name: 'doc1',
              component: PDFComponent
          },
          {
              path: '/doc2',
              name: 'doc2',
              component: PDFWeldingProcedure
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
        },
        {
            path: '/saves',
            name: 'saves',
            component: ClientsComponent
        },
        {
            path: '/save/:id',
            name: 'save',
            component: PDFComponent
        },
        {
            path: '*',
            name: 'error',
            component: ErrorComponent,
        }
      ]
    })
