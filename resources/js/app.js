import './bootstrap';
import 'bootstrap';
import { createApp } from 'vue';
import MainComponent from './components/MainComponent';

let app = createApp({});
app.component('main-component', MainComponent);

app.mount('#app');

