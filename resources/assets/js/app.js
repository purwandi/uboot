import Http from './http'

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./common');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('project', require('./pages/project.vue'))
Vue.component('issue', require('./pages/issue.vue'))
Vue.component('board', require('./pages/board.vue'))
Vue.component('board-column', require('./pages/board-column.vue'))
Vue.component('board-issue', require('./pages/board-issue.vue'))

const app = new Vue({
  el: '#app',
  activated () {
    Http.init()
  }
});
