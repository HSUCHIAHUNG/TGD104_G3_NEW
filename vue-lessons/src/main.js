import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import CKEditor from '@ckeditor/ckeditor5-vue';
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'


createApp(App).use(router).use( CKEditor ).use( VCalendar ).use( Vuetify ).mount('#app')
router.afterEach((to, from, next) => {
	window.scrollTo(0, 0);
});
