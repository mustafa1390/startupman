import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/components/Registeri.vue';
import Login from '@/views/Auth/Login.vue';
import Register from '@/views/Auth/Register.vue';
import Home from '@/views/Auth/Register.vue';
import Codeverify from '@/views/Auth/Codeverify.vue';
// import Login from '@/components/Login.vue';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
import { useAuthStore } from '@/stores/auth.js';
import AuthLayout from '@/layouts/AuthLayout.vue';


const routes = [
  {
    path: '/',
    component: DefaultLayout,
        children: [
            // { path: '', component: Home ,name: 'home' },
            { path: 'panel/user/:lang/dashboard', component: Home ,name: 'dashboard' },

        ]
    },

      {
    path:'/',  name: 'auth', component: AuthLayout,
    children: [
        { path: 'client/:lang/auth/login',  component: Login, name: 'login', },
        { path: 'client/:lang/auth/register',  component: Register, name: 'register',  },
        { path: 'client/:lang/auth/codeverify', component: Codeverify, name: 'codeverify', }


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
