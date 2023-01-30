import './bootstrap';
import {createApp} from 'vue';
import router from "./router";

import Index from "./components/Index.vue";
import HeaderComponent from "./components/HeaderComponent.vue";
import FooterComponent from "./components/FooterComponent.vue";


const app = createApp({});
app.component('HeaderComponent', HeaderComponent)
app.component('FooterComponent', FooterComponent)
app.component('Index', Index)
app.use(router);
app.mount('#app');


