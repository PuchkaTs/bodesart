
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./simpleCart.js');
require('./jquery-3.3.1.slim.min.js');
require('./lightgallery.min.js');

window.Vue = require('vue');
window.Swiper = require('./swiper.js');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
    	currentMenus: [],
        submenu:{
            id:0,
            name,
        },
        isMobileOpen: false,
    },
    methods: {
    	openNav:function(submenus){
    		document.getElementById("myNav").style.height = "300px";
    		this.currentMenus = (submenus);
    		console.log(currentMenu);
    	},
    	closeNav(){
			document.getElementById("myNav").style.height = "0px";
    	},
        toggleMobileMenu(){
            this.isMobileOpen =! this.isMobileOpen;
        },
        gotocart: function(){
            location.replace('/cart');
        }
    }
});


