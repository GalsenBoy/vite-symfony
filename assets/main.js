import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import TestComponent from './components/TestComponent.vue'
import { createRouter,createWebHistory } from 'vue-router'

const routes = [
    {
        name: 'test',
        path: '/app/test',
        component:TestComponent
    }
]
const router = createRouter({
    history:createWebHistory,
    routes
})

createApp(App).use(router).mount('#app')
