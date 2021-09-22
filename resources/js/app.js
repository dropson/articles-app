require('./bootstrap');

window.Vue = require('vue').default;

import store from './store/index'

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('article-component', require('./components/ArticleComponent.vue').default);
Vue.component('views-component', require('./components/ViewsComponent.vue').default);


const app = new Vue({
    el: '#app',
    store,
    created(){

        let url = window.location.pathname
        let slug = url.substring(url.lastIndexOf('/')+1)

        this.$store.commit('SET_SLUG', slug);
        this.$store.dispatch('getArticleData', slug);
        this.$store.dispatch('viewsIncrement', slug);
    }
});

