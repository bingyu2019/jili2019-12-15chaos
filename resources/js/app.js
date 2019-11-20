require('./bootstrap');

import Vue from 'vue';

Vue.component('test', require('./components/test.vue').default);
Vue.component('notice', require('./components/notice.vue').default);

window.app = new Vue({
    el: "#app",
});
