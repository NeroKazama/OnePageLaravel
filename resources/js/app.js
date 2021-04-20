/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import axios from "axios";
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('component-first', require('./components/ComponentFirst.vue').default);
Vue.component('component-second', require('./components/ComponentSecond.vue').default);
Vue.component('component-third', require('./components/ComponentThird.vue').default);
Vue.component('component-fourth', require('./components/ComponentFourth.vue').default);
Vue.component('component-fifth', require('./components/ComponentFifth.vue').default);
Vue.component('component-sixth', require('./components/ComponentSixth.vue').default);
Vue.component('component-seventh', require('./components/ComponentSeventh.vue').default);
Vue.component('component-eighth', require('./components/ComponentEighth.vue').default);
Vue.component('component-ninth', require('./components/ComponentNinth.vue').default);

var VueScrollTo = require('vue-scrollto');
Vue.use(axios);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        active: 'AboutUs',
        AboutUs: 0,
        Donate: 0,
        Masters: 0,
        Customer: 0,
        faq: 0,
        ContactUs: 0,
        cNinth: false,
        NavBarPhoneScreen: false,
    },

    mounted() {
        this.AboutUs = $('#AboutUs')[0].offsetTop;
        this.Donate = $('#Donate')[0].offsetTop;
        this.Masters = $('#Masters')[0].offsetTop;
        this.Customer = $('#Customer')[0].offsetTop;
        this.faq = $('#FAQ')[0].offsetTop;
        this.ContactUs = $('#ContactUs')[0].offsetTop;
        window.addEventListener('resize', this.handlesize);
        window.addEventListener('scroll', this.handleScroll);
    },

    methods: {
        activeNav(val) {
            this.active = val
        },

        handlesize() {
            this.AboutUs = $('#AboutUs')[0].offsetTop;
            this.Donate = $('#Donate')[0].offsetTop;
            this.Masters = $('#Masters')[0].offsetTop;
            this.Customer = $('#Customer')[0].offsetTop;
            this.faq = $('#FAQ')[0].offsetTop;
        },

        handleScroll() {
            if ((this.AboutUs - 50) <= window.scrollY && window.scrollY <= (this.Donate - 50)) {
                this.activeNav('AboutUs')
            } else if ((this.Donate - 50) <= window.scrollY && window.scrollY <= (this.Masters - 50)) {
                this.activeNav('Donate')
            } else if ((this.Masters - 50) <= window.scrollY && window.scrollY <= (this.Customer - 50)) {
                this.activeNav('Masters')
            } else if ((this.Customer - 50) <= window.scrollY && window.scrollY <= (this.faq - 50)) {
                this.activeNav('Customer')
            } else if ((this.faq - 50) <= window.scrollY && window.scrollY <= (this.ContactUs - 50)) {
                this.activeNav('FAQ')
            } else if ((this.ContactUs) <= window.scrollY) {
                this.activeNav('ContactUs')
            }
        },

        DonateMethodHide() {
            this.cNinth = false
        },

        DonateMethod() {
            this.cNinth = true
        }
    }
});

Vue.use(VueScrollTo, {
    container: "body",
    duration: 500,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
})