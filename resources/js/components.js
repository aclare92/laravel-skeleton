/** Import vue package */
import { createApp } from 'vue';

/** Init application */
const app = createApp({});

/** Import all components */
import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/** Mount and start the application */
app.mount('#app');
