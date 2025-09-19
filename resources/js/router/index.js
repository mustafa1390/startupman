import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/components/Registeri.vue';
import Inquiry from '@/components/Inquiry.vue';
import DefaultLayout from '@/layouts/DefaultLayout.vue';


const routes = [
  {
    path: '/',
    component: DefaultLayout,
        children: [
            { path: '', component: Home ,name: 'home' },
            { path: '/inquiry', component: Inquiry ,name: 'inquiry' },
        ]
    },


];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
