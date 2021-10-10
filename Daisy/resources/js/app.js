require('./bootstrap');
require('alpinejs');

import Vue from 'vue'
//Main pages
import App from './views/app.vue'
import Test from './views/test.vue'

const app = new Vue({
    el: '#app',
    components: { App,
        Test

    }
});
