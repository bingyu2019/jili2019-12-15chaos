require('./bootstrap');
require('./own/me.js');
import Vue from 'vue';
Vue.component('notice', require('./components/Notice.vue').default); // 首页关于图片版权的公告
window.app = new Vue({
    el: "#app",
});






