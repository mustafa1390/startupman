<!-- views/Login.vue -->
<template>


<div class="d-flex justify-content-center h-100 align-items-center">
    <div class="authincation-content style-2">
      <div class="row no-gutters">
        <div class="col-xl-12 tab-content">
          <div
            id="sign-up"
            class="auth-form tab-pane fade show active form-validation"
          >


            <form @submit.prevent="handleLogin" method="post"  >

                <div class="text-center mb-4">
                  <h3 class="text-center mb-2 text-dark">{{$t("User_login")}}</h3>
                </div>

              <div class="sepertor">
                <span class="d-block mb-4 fs-13">&nbsp; </span>
              </div>



    <div class="mb-3">
    <label class="form-label">{{$t("Mobile-number-email")}}<span v-if="!isValid" style="color: red;">* {{$t("Invalid_mobile_number")}}</span>
    </label>
      <input
        class="form-control"
        v-model="tell"
        type="text"
        id="tell"
        @input="checkMobileNumber"
    inputmode="numeric"
    pattern="[0-9]*"
      />
              </div>


              <div class="mb-3 position-relative">
                <label class="form-label">{{$t("password")}}</label>
                <input
                  type="password"
                  id="password"
                  v-model="password"
                  class="form-control"
                  value=""
                />
                <span class="show-pass eye">
                  <i class="fa fa-eye-slash"></i>
                  <i class="fa fa-eye"></i>
                </span>
              </div>


              <div class="form-row d-flex justify-content-between mt-4 mb-2">
									<div class="mb-4">
										<router-link :to="{ name: 'forgetpass' }"  class="btn-link text-primary">
                                        {{ $t("forgot_password") }}
                                        </router-link>
									</div>
								</div>

              <button type="submit" class="btn btn-block btn-primary"  :disabled="loading">
                <p v-if="loading"> {{ $t("Entering") }} </p>

  <div v-if="loading" class="spinner"></div>
  <div v-else>
    {{ $t("Sign_in") }}
  </div> </button>






            </form>


            <div class="new-account mt-3 text-center">
			<p class="font-w500"> {{ $t("already_have_account") }}
                <router-link   class="text-primary"   :to="{ name: 'register' }">
                    {{ $t("signup") }}
                </router-link>
            </p>
			</div>





          </div>



        </div>
      </div>
    </div>
  </div>



    <!-- <div class="login-page">
      <h1>Login</h1>
      <form @submit.prevent="handleLogin">
        <input v-model="email" type="email" placeholder="Email" required />
        <input v-model="password" type="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div> -->
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



  export default {
    setup() {
    const { t } = useI18n();
    const { notify } = useNotification();

    const success = () => {
      notify({
        title: t('success'),
        text: t('forgot-password'), // You can use a different key if needed
        type: 'success',
        // type: 'warn',
        // type: 'info',
        // type: 'error',
        group: 'app'
      });
    };
    const showNotification = () => {
      notify({
        title: t('Entering'),
        text: '......',
        // type: 'success',
        // type: 'warn',
        type: 'info',
        // type: 'error',
        group: 'auth',
        duration: 1000,

      });
    };

    const errori = () => {


      notify({
        title: t('Error'),
        text: t('Login_information_is_invalid'), // You can use a different key if needed
        // type: 'success',
        // type: 'warn',
        // type: 'info',
        type: 'error',
        group: 'app'
      });
    };

    return {
      t,
      showNotification,
      errori,
      success,
    };
  },

  computed: {
    windowLocation() {
      return window.location.origin;
    }
  },
    methods: {


    checkMobileNumber() {
      const iranMobileRegex = /^(\+98|0)?9\d{9}$/;
      this.isValid = iranMobileRegex.test(this.tell);
    },
    handleLogin() {
      if (this.isValid) {
        alert('Form submitted successfully');
      } else {
        alert('Please enter a valid mobile number');
      }
    },


        async handleLogin() {
            this.loading = true;

   this.showNotification();


            try {
      const credentials = {
        tell: tell.value,
        password: password.value,
      };

  const authStore = useAuthStore();

    await authStore.login(credentials);
   this.success();
    } catch (error) {
        this.loading = false;

// this.$notify({
//   title:   t('Entering') ,
//   text: "Hello user!",
// });

   this.errori();

        // swal("اطلاعات ورود نامعتبر می باشد", "لطفا نام کاربری و رمزعبور را به صورت صحیح وارد نمایید", "error");
      console.error('Login failed', error);
      console.log('Erroriman');
    }
        }
    },

  data() {
    return {

      loading: false, // To indicate the submission state

      tell: '',
      isValid: true,
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
