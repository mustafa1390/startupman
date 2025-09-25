<template>

    <div class="d-flex justify-content-center h-100 align-items-center">
        <div class="authincation-content style-2">
          <div class="row no-gutters">
            <div class="col-xl-8 col-lg-8  col-md-8  col-sm-12 tab-content">
      <form @submit.prevent="handleverify" method="post"  >


        <div class="mb-3" style="text-align: center; direction: ltr !important;">
                <label
                  for="email"
                  class="form-label"
                  >{{$t("Verification_code")}}</label
                ><br>
      <verification-code-input
      :key="resetKey"
       :length="6" @input="handleVerificationCode" />

      <br>
      <button type="submit" class="btn btn-block btn-primary"  :disabled="isButtonDisabled">
                {{ $t("Sign_in") }}              </button>
                </div>
            </form>



            <div class="d-flex align-items-center justify-content-center"></div>
			<p class="font-w500"> {{ $t("I_already_registered") }}
                <router-link   class="text-primary"   :to="{ name: 'login' }">
                    {{ $t("login") }}
                </router-link>
            </p>
			<p class="font-w500"> {{ $t("I_not_account") }}
                <router-link   class="text-primary"   :to="{ name: 'register' }">
                    {{ $t("signup") }}
                </router-link>
            </p>
			</div>

    </div>
    </div>
    </div>
  </template>

  <script>
  import router from '@/router';
  import swal from 'sweetalert';
  import VerificationCodeInput from '@/components/auth/VerificationCodeInput.vue';

import { getCheckCodeverify } from '@/services/user/get_codeverify.js';
import { PostPrevUrl } from '@/services/loguser/post_log_user.js';


import { useI18n } from 'vue-i18n';
import { useNotification } from '@kyvg/vue3-notification';
  export default {


    setup() {
        const { t } = useI18n();
    const { notify } = useNotification();

    const notifylogin = (titlenot , textnot) => {
      notify({
        // title: titlenot,
        title: t(titlenot),
        text: t(textnot),
        type: 'success',
        group: 'app'
      });
    };

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
      success,
      errori,
      notifylogin,
    };

},
    components: {
      VerificationCodeInput,
    },

    created() {
    this.email = localStorage.getItem('email');
    },
  data() {
    return {
    isButtonDisabled: false ,
    resetKey: 0 ,
    code: '' ,
    email: '' ,
    }
},


    methods: {
         handleVerificationCode(code) {
        if(code.length==5){ this.isButtonDisabled = false;}
        if(code.length==6){
            this.isButtonDisabled = true;
            this.checkedverifyfun(code);
        }
      },
      handleverify(check_code){
        console.log(this.userInput)

      this.notifylogin('Wellcome','wellcome_to_arzicomplex');
    //   router.push('/panel/user/'+this.$route.params.lang+'/dashboard');
    window.location.href = window.location.origin+'/panel_login/'+this.$route.params.lang+'/'+check_code.remember_token;

      },

      async checkedverifyfun(code){
        var check_code =   await getCheckCodeverify(code);
        if(check_code.status=='success'){
            this.handleverify(check_code);
        }else{
            this.errori();
            this.$router.push({ path: '/client/'+this.$route.params.lang+'/auth/codeverify' });
            this.resetKey++;
            // swal("کدوریفای", "کد وریفای اشتباه می باشد", "warning");

        }
      }


    },
  };
  </script>
