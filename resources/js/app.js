
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('lk-component', require('./components/LKComponent.vue').default);

const app = new Vue({
    el: '#app',
});
