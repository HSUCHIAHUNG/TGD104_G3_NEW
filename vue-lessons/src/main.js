import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import CKEditor from '@ckeditor/ckeditor5-vue';
import VueTypedJs from 'vue-typed-js'


createApp(App).use(router).use( CKEditor ).use( VueTypedJs ).mount('#app')
