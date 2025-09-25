import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/components/Registeri.vue';
import Login from '@/views/Auth/Login.vue';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
import { useAuthStore } from '@/stores/auth.js';


const routes = [
  {
    path: '/',
    component: DefaultLayout,
        children: [
            { path: '', component: Home ,name: 'home' },
            // { path: '/login', component: Login ,name: 'login' },
            { path: 'client/:lang/auth/login',  component: Login, name: 'login', },

        ]
    },


];
const router = createRouter({
  history: createWebHistory(),
  routes,
});


// Navigation guard for protected routes
router.beforeEach((to, from, next) => {
    const authStore = useAuthStore();

    // Load token from localStorage if not already loaded
    authStore.loadTokenFromLocalStorage();

    if (to.meta.requiresAuth && !authStore.isAuthenticated()) {
      next('/client/'+to.params.lang+'/auth/login'); // Redirect to login if not authenticated
    } else {
      next(); // Otherwise, proceed as normal
    }
  });



export default router;
