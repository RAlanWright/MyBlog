require('./bootstrap');

import { createApp } from 'vue'
import TestComponent from './components/TestComponent.vue';

createApp({
    components: {
        TestComponent,
    }
}).mount('#app')
