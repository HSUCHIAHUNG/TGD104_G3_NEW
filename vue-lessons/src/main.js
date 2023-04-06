import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import CKEditor from '@ckeditor/ckeditor5-vue';
import VueTypedJs from 'vue-typed-js'
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'


createApp(App).use(router).use( CKEditor ).use( VCalendar ).use( Vuetify ).use( VueTypedJs ).mount('#app')
