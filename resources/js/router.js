import Vue from 'vue'
import VueRouter from 'vue-router'

// PDFWelderCertificate
import WelderCertificate from './components/DocumentsWelderCertificate/WelderCertificate.vue'
import NewWelderCertificate from './components/DocumentsWelderCertificate/NewWelderCertificate.vue'
import EditWelderCertificate from './components/DocumentsWelderCertificate/EditWelderCertificate.vue'
import ClientsComponent from './components/DocumentsWelderCertificate/ClientsComponent.vue'

// PDFWeldingRecord
import WeldingRecord from './components/DocumentsWeldingRecord/WeldingRecord.vue'

// general
import ErrorComponent from './components/ErrorComponent.vue'

Vue.use(VueRouter)

export default new VueRouter({
    base: process.env.BASE_URL,
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'welderCertificate',
            component: WelderCertificate
        },
        {
            path: '/welding-record',
            name: 'weldingRecord',
            component: WeldingRecord
        },
        {
            path: '/new-welder-certificate',
            name: 'newWelderCertificate',
            component: NewWelderCertificate
        },
        {
            path: '/edit-welder-certificate/:id',
            name: 'editWelderCertificate',
            component: EditWelderCertificate
        },
        {
            path: '/saves',
            name: 'saves',
            component: ClientsComponent
        },
        {
            path: '/save/:id',
            name: 'save',
            component: WelderCertificate
        },
        {
            path: '*',
            name: 'error',
            component: ErrorComponent,
        }
    ]
})
