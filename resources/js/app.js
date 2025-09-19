import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

import Vue3Progress from "vue3-progress";
import Notifications from '@kyvg/vue3-notification';




const options = {
    // position: "absolute",
    // height: "5px",
    // color:"#374C98;",

  color: '#374C98',
  failedColor: '#ff0000',
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


const app = createApp(App);
app.use(router);
app.use(Vue3Progress, options);
app.use(Notifications);


app.mount('#app');



