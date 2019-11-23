require('./bootstrap');

import Vue from 'vue';

Vue.component('notice', require('./components/Notice.vue').default);

window.app = new Vue({
    el: "#app",
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
