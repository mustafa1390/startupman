<!-- views/Login.vue -->
<template>



            <form @submit.prevent="handleRegister" method="post"  >

                <div class="text-center mb-4">
                  <h3 class="text-center mb-2 text-dark">{{$t("signup")}}</h3>
                </div>



            <div class="mb-3">
                <label
                  for="fullname"
                  class="form-label"
                  >{{$t("fullname")}}</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="fullname"
                  v-model="fullname"
                  required
                />
              </div>

    <div class="mb-3">
    <label class="form-label">{{$t("mobile_phone")}}<span v-if="!isValid" style="color: red;">* {{$t("Invalid_mobile_number")}}</span>
    </label>
      <input
        class="form-control"
        v-model="tell"
        type="text"
        id="tell"
        @input="checkMobileNumber"
    inputmode="numeric"
    pattern="[0-9]*"
        required
      />
    </div>


              <div class="mb-3 position-relative">
                <label class="form-label">{{$t("password")}}</label>
                <input

          type="password"
          id="password"
          v-model="password"
          required
                  class="form-control"
                  value=""
                />
                <span class="show-pass eye">
                  <i class="fa fa-eye-slash"></i>
                  <i class="fa fa-eye"></i>
                </span>
              </div>

              <div class="mb-3 position-relative">
                <label class="form-label">{{$t("password-again")}}</label>
                <input

            type="password"
          id="confirmPassword"
          v-model="confirmPassword"
          required
                  class="form-control"
                  value=""
                />
                <span class="show-pass eye">
                  <i class="fa fa-eye-slash"></i>
                  <i class="fa fa-eye"></i>
                </span>
              </div>


      <div v-if="passwordError" class="error">
        {{ $t("password_does_not_match") }}
      </div>

      <div v-if="passwordError6" class="error">
        {{ $t("Password6characters") }}
      </div>

              <button type="submit" class="btn btn-block btn-primary"  :disabled="loading">
                <p v-if="loading"> </p>

  <div v-if="loading" class="spinner"></div>
  <div v-else>
    {{ $t("signup") }}
  </div> </button>






            </form>

            <div class="new-account mt-3 text-center">
			<p class="font-w500"> {{ $t("already_have_account") }}
                <router-link   class="text-primary"   :to="{ name: 'login' }">
                    {{ $t("login") }}
                </router-link>
            </p>
			</div>



 


  </template>

<style>
    .dropdown, .dropup {
      padding: 0px 90px 0px90px!important;
    }

    .dropdown-menu {
        width: 30px !important;
    }

    .dropdown, .dropup {
  position: relative;
}



label {
  display: inline-block;
  margin-bottom: .5rem;
}

.dropdown-menu {
  width: 30px !important;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: .5rem 0;
  margin: .125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #5b5e81;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: .25rem;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  border: 0;
  border-radius: var(--bs-dropdown-item-border-radius, 0);
}

.dropdown-menu .dropdown-item {
  font-size: 1rem;
  color: #f0bb0b;
  background-color: #5b5e81;
  text-align: right;
}



a:hover {
cursor:pointer!important;
}

</style>
  <script>

import { ref } from 'vue';
  import { useAuthStore } from '@/stores/auth.js';
  import { useI18n } from 'vue-i18n';

import { useNotification } from '@kyvg/vue3-notification';

import swal from 'sweetalert';


import { getRegister } from '@/services/auth/register.js';



  export default {
    setup() {
    const { t } = useI18n();
    const { notify } = useNotification();

    const success = () => {
      notify({
        title: t('success'),
        text: t('forgot-password'),
        group: 'app'
      });
    };
    const showNotification = () => {
      notify({
        title: t('Entering'),
        text: '......',
        type: 'info',
        group: 'auth',
        duration: 1000,

      });
    };

    const errori = () => {
      notify({
        title: t('Error'),
        text: t('Login_information_is_invalid'),
        type: 'error',
        group: 'app'
      });
    };

    const validuser = () => {
      notify({
        title: t('Error'),
        text: t('already_been_registered'),
        type: 'warn',
        group: 'app',
        duration: 6000,
      });
    };

    return {
      t,
      showNotification,
      errori,
      success,
      validuser,
    };
  },

    methods: {

    checkMobileNumber() {
      const iranMobileRegex = /^(\+98|0)?9\d{9}$/;
      this.isValid = iranMobileRegex.test(this.tell);
    },

        async handleRegister() {

      if (this.password !== this.confirmPassword) {
        this.passwordError = true;
      } else {
        this.passwordError = false;
      }


      if (this.password.length < 6) {
        this.passwordError6 = true;
      } else {
        this.passwordError6 = false;
      }



   this.loading = true;

   this.showNotification();

   if ((this.isValid)&&(this.password === this.confirmPassword)&&(this.password !== null)
   &&(this.fullname !== null)&&(this.password.length > 5)) {

    try {
      const credentials = {
        name: fullname.value,
        tell: tell.value,
        password: password.value,
      };


      var response = await getRegister(credentials);
        this.myus = response;
        if(this.myus.status === 401){
            this.validuser();
            this.$router.push({ name: 'login'  });

        }else if(this.myus.status === 200){



      const credentials_login = {
        tell: tell.value,
        password: password.value,
      };
      console.log(credentials_login);
      const authStore = useAuthStore();
        await authStore.login(credentials_login);
   this.success();
        }


   this.success();
    } catch (error) {
        this.loading = false;
   this.errori();
       console.error('Login failed', error);
      console.log('Erroriman');
    }

   }else{


    this.loading = false;
    console.log('eshhhtt');
    this.errori();


   }


        }
    },

  data() {
    return {

      loading: false, // To indicate the submission state

      tell: '',
      fullname: '',
      isValid: true,

      password: '',
      confirmPassword: '',
      passwordError: false,
      passwordError6: false,
    };
  },
  mounted() {
    // Simulate data loading with a timeout
    setTimeout(() => {
      this.loading = false;
    }, 3000);
  },


}
  </script>



<style>
.spinner {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-left-color: #000;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}
</style>



<style scoped>
.error {
  color: red;
  margin-top: 5px;
}
</style>
