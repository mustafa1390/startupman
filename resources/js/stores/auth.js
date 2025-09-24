// stores/auth.js
import { defineStore } from 'pinia';
import { ref } from 'vue';
import axios from 'axios'; // We'll use axios to make HTTP requests
import router from '../router';
import swal from 'sweetalert';

import { getCodeverify } from '@/services/user/get_codeverify.js';
import api from '../services/axios';
import { BASE_URL } from '../services/configuration';

import { getProfileUserAuth } from '@/services/user/get_profileuserauth.js';


export const useAuthStore = defineStore('auth', () => {
  const token = ref(null); // Store the Bearer token
  const user = ref(null); // Store user info
  const email = ref(null); // Store user info
  const image = ref(null); // Store user info
  const user_id = ref(null); // Store user info
  const name = ref(null); // Store user info
  const aguser = ref(null); // Store user info
  const email_code_verify = ref(null); // Store user info
  const email_verify = ref(null); // Store user info

  // Handle login with username and password
  const login = async (credentials) => {
    try {
      const response = await axios.post(BASE_URL+'login', credentials);


    //   alert('gaser');

      // Save the token from response
      token.value = response.data.data.token;
      user.value = response.data.data.name;
      email.value = response.data.data.email;
      image.value = response.data.data.image;
      user_id.value = response.data.data.id;
      name.value = response.data.data.name;
      aguser.value = response.data.data;
      email_code_verify.value  = response.data.data.email_code_verify;
      email_verify.value  = response.data.data.email_verify;


      // Save token to localStorage to persist across refreshes
      localStorage.setItem('token', token.value);
      localStorage.setItem('email', email.value);
      localStorage.setItem('image', image.value);
      localStorage.setItem('user_id', user_id.value);
      localStorage.setItem('name', user.value);
    //   swal("ورود", "ورود باموفقیت انجام شد", "success");


    if(email_verify.value!='inactive'){



    // alert(email_code_verify.value);
     var beia = await getCodeverify();
    //  console.log(beia);
    //  this.products = beia
    router.push({ name: 'codeverify' })

    }else{

        router.push({ name: 'dashboard' })
    }
    // console.log(email_code_verify.value);
    // alert(email_code_verify.value);
    } catch (error) {
      console.error('Login error:', error);

      throw error;
    }
  };

  const  logout = async () => {

    var response = await getProfileUserAuth();
    var myprofile = response;

    token.value = null;
    user.value = null;
    email.value = null;
    image.value = null;
    user_id.value = null;
    name.value = null;
    aguser.value = null;

    localStorage.removeItem('token');
    localStorage.removeItem('email');
    localStorage.removeItem('image');
    localStorage.removeItem('id');
    localStorage.removeItem('name');


    swal("از حساب کاربری با موفقیت خارج شدید", "خروج باموفقیت انجام شد", "success");
     router.push({ name: 'logout'  , params: { token: myprofile.remember_token }  });
    // window.location.href = window.location.origin+'/panel_logout/'+this.$route.params.lang+'/'+myprofile.remember_token;


  };

  // Check if user is authenticated
  const isAuthenticated = () => !!token.value || !!localStorage.getItem('token');

  // Get the token if it's stored in localStorage
  const loadTokenFromLocalStorage = () => {
    const storedToken = localStorage.getItem('token');
    const storedemail = localStorage.getItem('email');
    const storedimage = localStorage.getItem('image');
    const storeduser_id = localStorage.getItem('id');
    const storedname = localStorage.getItem('name');
    if (storedToken) {
      token.value = storedToken;
      email.value = storedemail;
      image.value = storedimage;
      user_id.value = storeduser_id;
      name.value = storedname;
    }
  };

  return { token, user, email,image, login, logout, isAuthenticated, loadTokenFromLocalStorage };
});
