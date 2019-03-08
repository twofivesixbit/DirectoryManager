// Vue instance

window.Vue = require('vue');

// Import dependencies

window.axios = require('axios');

// Vue components

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// Vue instance

const app = new Vue({
    el: '#app',

    methods: {
    	submitLogoutForm() {
    	    document.getElementById('logout-form').submit()
    	}
    }
});
