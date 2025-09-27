<!-- views/Login.vue -->
<template>



    <notifications group="auth" position="top left" />
    <notifications group="app" position="top left" />


    <div id="plzcomplite" v-if="this.isComplated" style="padding: 15px; margin: 15px; text-align:center;  "
    class="alert-success">
        <!--موارد اجباری را تکمیل کنید-->

        <h3>ثبت نام شما در همایش پیاده روی و شرکت در قرعه کشی انجام شد</h3>
        <h3>              کد قرعه کشی
            {{ this.myus.users.id }}
        </h3>



        <InfoUser :info="this.myus.users" />

    </div>


    <form @submit.prevent="handleRegister" method="post">
<div  v-if="!this.isComplated" >
        <div class="text-center mb-4">
            <h3 class="text-center mb-2 text-dark">ثبت نام   </h3>
        </div>

        <div class="show_index_all show_field show_index_1 show_required" data-uid="c613be801c81b1008524815b97e58631"
            data-ftype="fname" style="padding: 15px; ">
            <div class="" style="padding: 10px 5px;  ">
                نام و نام خانوادگی  <span style="color: red">*</span>
                <span style="color: gray;font-size: smaller;font-weight: 100; "> </span>
            </div>
            <div class="input-group" style="">
                <span class="ftext input-group-addon">
                    <span data-toggle="tooltip" data-placement="top" title="" style="color:green;"
                        class="glyphicon glyphicon-user"></span>

                </span>
                <input type="text" placeholder2="نام و نام خانوادگی *"
                    class="input-lg form-control view_in_editor TYPE_fname digi_field class_required " id="fname"
                    v-model="fname" required>


                <br>
            </div>

        </div>
<!--
        <div class="show_index_all show_field show_index_1 show_required" data-uid="c613be801c81b1008524815b97e58631"
            data-ftype="fname" style="padding: 15px; ">
            <div class="" style="padding: 10px 5px;  ">
                  نام پدر     <span style="color: red">*</span>
                <span style="color: gray;font-size: smaller;font-weight: 100; "> </span>
            </div>
            <div class="input-group" style="">
                <span class="ftext input-group-addon">
                    <span data-toggle="tooltip" data-placement="top" title="" style="color:green;"
                        class="glyphicon glyphicon-user"></span>

                </span>
                <input type="text" placeholder2="نام پدر"
                    class="input-lg form-control view_in_editor TYPE_fname digi_field class_required " id="father"
                    v-model="father" required>


                <br>
            </div>

        </div>

        <div class="show_index_all show_field show_index_1 show_required" data-uid="c613be801c81b1008524815b97e58631"
            data-ftype="fname" style="padding: 15px; ">
            <div class="" style="padding: 10px 5px;  ">
                       کدملی   <span style="color: red">*</span>

                <span v-if="isValid_Codemelli==0" style="color: red;"> کدملی استعلامی از ثبت احوال وجود ندارد</span>
                <span style="color: gray;font-size: smaller;font-weight: 100; "> </span>
            </div>
            <div class="input-group" style="">
                <span class="ftext input-group-addon">
                    <span data-toggle="tooltip" data-placement="top" title="" style="color:green;"
                        class="glyphicon glyphicon-barcode"></span>

                </span>
                <input type="text" placeholder2="کدملی"
                    class="input-lg form-control view_in_editor TYPE_fname digi_field class_required " id="codmelli"
                    v-model="codmelli"   @input="checkCardmelli"  required>


                <br>
            </div>

        </div> -->

        <div class="show_index_all show_field show_index_1 show_required" style="padding: 15px; ">
            <div class="" style="padding: 10px 5px;  ">
                شماره موبایل <span style="color: red">*</span>
                <span v-if="!isValid" style="color: red;">* فرمت موبایل صحیح نیست</span>
                <span style="color: gray;font-size: smaller;font-weight: 100; "> </span>
            </div>
            <div class="input-group" style="">
                <span class="ftext input-group-addon">
                    <span data-toggle="tooltip" data-placement="top" title="" style="color:green;"
                        class="glyphicon glyphicon-phone"></span>

                </span>


                <input type="text" placeholder2="شماره موبایل"
                    class="input-lg form-control view_in_editor  digi_field class_required " id="tell"
                    v-model="tell"   @input="checkMobileNumber" required  >


                <br>
            </div>

        </div>






        <button type="submit" class="btn btn-2lg btn-success btn-block" :disabled="loading">
            <p v-if="loading"> </p>

            <div v-if="loading" class="spinner"></div>
            <div style="height: 40px;
  padding-top: 10px;" v-else>
                ثبت نام
            </div>
        </button>



    </div>


    </form>

    <div class="new-account mt-3 text-center">
        <p class="font-w500"> جهت ورود
            <router-link class="text-primary" :to="{ name: 'login' }">
                کلیک نمایید
            </router-link>
        </p>
    </div>






</template>
 
<script>

import { useNotification } from '@kyvg/vue3-notification';


import { getRegister } from '@/services/auth/register.js';
import { getStatusCodmelli } from '@/services/auth/get_check_nationalcode.js';
import  InfoUser  from '@/components/InfoUser.vue';



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

    components: {
        InfoUser,
    },
    methods: {

        checkMobileNumber() {
            const iranMobileRegex = /^(\+98|0)?9\d{9}$/;
            this.isValid = iranMobileRegex.test(this.tell);
        },

        async  checkCardmelli() {


            if(this.codmelli.length > 9){

            var response_cod = await getStatusCodmelli(this.codmelli);
                    this.codemelli_stst = response_cod;

                    // if(this.codemelli_stst.status === '0'){

                        this.isValid_Codemelli = this.codemelli_stst.status;
                    // }


                }

        },

        async handleRegister() {





            this.loading = true;
            this.showNotification();



            if ((this.isValid) && (this.fname !== null) && (this.father !== null)&& (this.codmelli !== null) && (this.fname.length > 2)&& (this.codmelli.length > 9)&&(this.isValid_Codemelli  == '1')) {

                try {
                    const credentials = {
                        fname: fname.value,
                        tell: tell.value,
                        father: father.value,
                        codmelli: codmelli.value,
                    };


                    var response = await getRegister(credentials);
                    this.myus = response;

                    if (this.myus.status === 'hasdone') {
                        this.validuser();
                        this.loading = false;


                    } else if (this.myus.status === 'newuser') {
                    this.success();
                    this.isComplated = true;
                    }



                } catch (error) {
                    this.loading = false;
                    this.errori();
                    console.error('Login failed', error);
                    console.log('Erroriman');
                }

            } else {


                this.loading = false;
                console.log('eshhhtt');
                this.errori();

            this.loading = false;


            }


        }
    },

    data() {
        return {

            loading: false, // To indicate the submission state
            codemelli_stst:[],
            tell: '',
            fname: '',
            father: '',
            codmelli: '',
            isValid: true,
            isValid_Codemelli: 1,
            isComplated: false,

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



<style>
table {
  width: 60%;
  border-collapse: collapse;
  margin: 20px auto;
}

th, td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: center;
}

th {
  background-color: #f4f4f4;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f1f1f1;
}

caption {
  caption-side: top;
  font-size: 1.5em;
  margin-bottom: 10px;
}
</style>
