import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/components/Registeri.vue';
import Login from '@/components/Login.vue';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
 

const routes = [
  {
    path: '/',
    component: DefaultLayout,
        children: [
            { path: '', component: Home ,name: 'home' },
            { path: '/login', component: Login ,name: 'login' },
        ]
    },


];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
