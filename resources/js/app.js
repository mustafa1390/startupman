import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

import { createPinia } from 'pinia';
import Vue3Progress from "vue3-progress";
import Notifications from '@kyvg/vue3-notification';


import { createI18n } from 'vue-i18n';
import fa from './language/fa.json';
import en from './language/en.json';



const options = {
    position: "absolute",
    height: "5px",
    // color:"#E2FE26",

//   color: '#E2FE26;',
//   failedColor: '#fdfdfdff',
  thickness: '6px',
  location: 'top',
  autoRevert: true,
  inverse: false,
  transition: {
    speed: '0.5s',
    opacity: '0.6s',
    termination: 300
  }
  };



  const i18n = createI18n({
    messages: {
        fa: fa,
        en: en
    },
    locale: 'en',
    fallbackLocale: ['fa', 'en']
});


router.beforeEach((to, from, next) => {
    const lang = to.params.lang || 'en';
    i18n.global.locale = lang;
    window.scrollTo(0, 0);
    next();

  });



const app = createApp(App);
const pinia = createPinia();

  app.use(pinia);
  app.use(router);
  app.use(i18n);

app.use(Vue3Progress, options);
app.use(Notifications);


app.mount('#app');



