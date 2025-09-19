<template>


<form @submit.prevent="handleRegisteri"  method="post"    >


<div class="show_index_all show_field show_index_1 show_required" data-uid="c613be801c81b1008524815b97e58631" data-ftype="FULLNAME" style="padding: 15px; ">
                         <div class="" style="padding: 10px 5px;  ">
            نام و نام خانوادگی خود را وارد نمایید                                            <span style="color: red">*</span>
                                <span style="color: gray;font-size: smaller;font-weight: 100; ">                    </span>
        </div>
                        <div class="input-group" style="">
            <span class="ftext input-group-addon">
                <span data-toggle="tooltip" data-placement="top" title="" style="color:green;" class="glyphicon glyphicon-user"></span>
                <!--<span style="color: red">*</span>-->
            </span>


<input type="text" placeholder2="نام و نام خانوادگی *"
class="input-lg form-control view_in_editor TYPE_FULLNAME digi_field class_required "
id="fname" v-model="fname" required>


            <br>
        </div>
        <div class="hiskey" data-uid="c613be801c81b1008524815b97e58631" data-type="FULLNAME" style="padding: 5px; ">
            <span style="font-size: smaller;color: gray">
                <!--میتوانید یکی از موارد زیر را انتخاب کنید-->
                میتوانید یکی از موارد زیر را انتخاب کنید                    </span>
            <br>
        </div>

</div>

<div class="show_index_all show_field show_index_2 show_required" data-uid="39e50de4a46ca26f017d6eab17be5ebe" data-ftype="MOBILE" style="padding: 15px; ">
                         <div class="" style="padding: 10px 5px; ">
            شماره موبایل خود را وارد نمایید                                            <span style="color: red">*</span>
                                <span style="color: gray;font-size: smaller;font-weight: 100; ">                    </span>
        </div>
                        <div class="input-group" style="">
            <span class="ftext input-group-addon">
                <span data-toggle="tooltip" data-placement="top" title="" style="color:green;" class="glyphicon glyphicon-phone"></span>
                <!--<span style="color: red">*</span>-->
            </span>


<input type="tel" placeholder2="موبایل *" class="input-lg form-control view_in_editor TYPE_MOBILE digi_field class_required "
name="39e50de4a46ca26f017d6eab17be5ebe" required="required" data-type="MOBILE" data-toggle="tooltip2" data-placement="top" title="">



            <br>
        </div>
        <div class="hiskey" data-uid="39e50de4a46ca26f017d6eab17be5ebe" data-type="MOBILE" style="padding: 5px;">
            <span style="font-size: smaller;color: gray">
                <!--میتوانید یکی از موارد زیر را انتخاب کنید-->
                میتوانید یکی از موارد زیر را انتخاب کنید                    </span>
            <br>
        </div>

</div>


<div class="mb-3">
    <label class="form-label">phone<span v-if="!isValid" style="color: red;">* format</span>
    </label>
      <input
        class="form-control"
        v-model="tell"
        type="text"
        id="tell"
        @input="checkMobileNumber"
        required
      />
    </div>





<div class="show_index_all show_field show_index_3 show_required" data-uid="e4279e4b8c59915328c89feaeee5674f" data-ftype="LONGTEXT" style="padding: 15px; ">
                         <div class="" style="padding: 10px 5px;  ">
            تعداد افراد همراه را بنویسید                                            <span style="color: red">*</span>
                                <span style="color: gray;font-size: smaller;font-weight: 100; ">                    </span>
        </div>
                        <div class="input-group" style="">
            <span class="ftext input-group-addon">
                <span data-toggle="tooltip" data-placement="top" title="" style="color:green;" class="glyphicon glyphicon-edit"></span>
                <!--<span style="color: red">*</span>-->
            </span>

            <textarea name="e4279e4b8c59915328c89feaeee5674f" required="required" placeholder2="سوال *" data-type="LONGTEXT" class="input-lg form-control TYPE_LONGTEXT digi_field class_required view_in_editor" data-toggle="tooltip2" data-placement="top" title=""></textarea>                    <br>
        </div>
        <div class="hiskey" data-uid="e4279e4b8c59915328c89feaeee5674f" data-type="LONGTEXT" style="padding: 5px;">
            <span style="font-size: smaller;color: gray">
                <!--میتوانید یکی از موارد زیر را انتخاب کنید-->
                میتوانید یکی از موارد زیر را انتخاب کنید                    </span>
            <br>
        </div>

</div>


<div class="show_index_all show_index_submit show_index_3" style="padding: 5px 15px;">
<br>
<br>
                        <p id="timeout" style="text-align: center;font-weight: bold;color: red; padding: 20px">
    مدت زمان تکمیل این فرم به پایان رسیده است .

</p>


    <div id="saveing" style="padding: 15px; margin: 15px; text-align:center; display: none " class="alert-warning">
        <img src="{{ asset('register_files/loading_002.gif')}}" style="width: 80px" alt="">
        <br>
        <!--در حال ذخیره اطلاعات ...-->
        در حال ذخیره اطلاعات...                <br>
        <!--تا دریافت کدپیگیری منتظر بمانید-->
        تا دریافت کدپیگیری منتظر بمانید            </div>
    <div id="notsaved" style="padding: 15px; margin: 15px; text-align:center; display: none " class="alert-danger">
        متاسفانه اطلاعات شما ثبت نشد.
        <br>
        به هیچ وجه از این صفحه خارج نشوید
        <br>
        مجددا ثبت نهایی را انتخاب کنید تا کد پیگیری را دریافت کنید
    </div>
    <div id="plzcomplite" style="padding: 15px; margin: 15px; text-align:center; display: none "
    class="alert-warning">
        <!--موارد اجباری را تکمیل کنید-->
        موارد اجباری را تکمیل کنید
    </div>



<br>
</div>
<br>
<br>
<br>




<div v-if="fnameError" class="error">
       hhjjhjhj
      </div>

      <div v-if="fnameError" class="error">
        ffffff
      </div>

              <button type="submit" class="btn btn-block btn-primary"  :disabled="loading">
                <p v-if="loading"> </p>

  <div v-if="loading" class="spinner"></div>
  <div v-else>
   ثبت نام در همایش پیاده روی
  </div> </button>




</form>

<script>


import { useNotification } from '@kyvg/vue3-notification';



import { getRegister } from '@/services/auth/register.js';



  export default {
    setup() {
    const { notify } = useNotification();

    const success = () => {
      notify({
        title: 'باموفقیت انجام شد',
        text: 'اطلاعات با موفقیت ثبت شد',
        group: 'app'
      });
    };
    const showNotification = () => {
      notify({
        title: 'در حال ثبت اطلاعات',
        text: '......',
        type: 'info',
        group: 'auth',
        duration: 1000,

      });
    };

    const errori = () => {
      notify({
        title: 'اخطار !',
        text: 'لطفا اطلاعات ثبت نامی را بصورت صحیح وارد نمایید',
        type: 'error',
        group: 'app'
      });
    };

    const validuser = () => {
      notify({
        title: 'اخطار !',
        text: 'اطلاعات وارد شده از قبل در سیستم وجود دارد',
        type: 'warn',
        group: 'app',
        duration: 6000,
      });
    };

    return {
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
      alert('ffff');
    },

        async handleRegisteri() {

            alert('hhhh');
            this.success();

      if (this.fname !== null) {
        this.fnameError = true;
      } else {
        this.fnameError = false;
      }


      if (this.password.length < 6) {
        this.fname1 = true;
      } else {
        this.fname1 = false;
      }



   this.loading = true;

   this.showNotification();

   if ((this.isValid)&&(this.fname !== null)
   &&(this.tell !== null)&&(this.father !== null)&&(this.codmelli.length > 9)) {

    try {
      const credentials = {
        fname: fname.value,
        tell: tell.value,
        father: father.value,
        codmelli: father.value,
      };


      var response = await getRegister(credentials);
        this.myus = response;
        if(this.myus.status === 401){
            this.validuser();
            this.$router.push({ name: 'login'  });

        }else if(this.myus.status === 200){


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
      fname: '',
      isValid: true,

      password: '',
      confirmPassword: '',
      fnameError: false,
      fname1: false,
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




</template>
