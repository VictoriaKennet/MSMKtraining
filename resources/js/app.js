require('./bootstrap');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import VeeValidate, { Validator } from 'vee-validate';

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from './router.js'

Vue.use(VeeValidate);
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

const app = new Vue({
    el: '#app',
    router
});
