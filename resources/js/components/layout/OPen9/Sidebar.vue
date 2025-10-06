<template>


        <div class="box-logo">
            <a href="index.html"><img src="" alt=""></a>
        </div>
        <!-- <div class="connect">
                    <a href="market-wallet.html" id="connectbtn" class="tf-button style-1 type-1 text-center">
                        <span>Wallet connect</span>
                        <i class="icon-wa"></i>
                    </a>
                </div> -->
        <div class="list-menu over-content">
            <ul class="menu-content">
                <li>
                                            <router-link :to="{ name: 'dashboard'  }"  >

                                                <i class="icon-home-alt"></i>
                                                <span class="span_icon">{{ $t('home') }}</span>

                                                </router-link>
                </li>
                <li>

                                            <router-link :to="{ name: 'test'  }"  >
                    <i class="icon-gem-1"></i>
                        <span class="span_icon">About us</span>
                                                                     </router-link>

                </li>
                <li>

                                            <router-link :to="{ name: 'landing_page'  }"  >
                    <i class="icon-gem-1"></i>
                        <span class="span_icon">landing_page  </span>
                                                                     </router-link>

                </li>
                <li  :class="['has-item', { active: IsActiveI }]"   @click="toggleLiItem()">
                    <!-- <li class="has-item active"> -->
                    <a class="button-sub-item"><i class="icon-link"></i><span class="span_icon">Explore</span> </a>
                    <ul  :class="['sub-item', { d_block: IsActiveI }]">
                        <!-- <ul class="sub-item active"> -->
                        <li><a href="#"><span class="span_icon_ul_li">Link creation</span></a></li>
                        <li><a href="#"><span class="span_icon_ul_li">Link List</span></a></li>
                        <li><a href="#"><span class="span_icon_ul_li">Get link / Banner</span></a></li>
                    </ul>
                </li>
                <li class="has-item">
                    <a class="button-sub-item"><i class="icon-pages"></i> Pages</a>
                    <ul class="sub-item">
                        <li><a href="#">Link creation</a></li>
                        <li><a href="#">Link list</a></li>
                        <li><a href="#">Get link / Banner</a></li>
                    </ul>
                </li>
                <li class="has-item">
                    <a class="button-sub-item"><i class="icon-receipt"></i> Blog</a>
                    <ul class="sub-item">
                        <li><a href="#">Link creation</a></li>
                        <li><a href="#">Link list</a></li>
                        <li><a href="#">Get link / Banner</a></li>
                    </ul>
                </li>
                <!-- <li>
                            <a href="contact-us.html"><i class="icon-headphones"></i> Contact</a>
                        </li> -->
            </ul>
        </div>
        <div class="list-menu wrap-bottom">
            <ul class="menu-bottom">
                <li  :class="['has-item language relative', { active: IsActiveLang }]"  @click="toggleLang()">
                    <a class="button-sub-item" v-if="this.$route.params.lang=='en'">
                        <img src="/index_template/index/assets/images/english.png" alt="">
                        <span>English</span>
                    </a>
                    <a class="button-sub-item" v-if="this.$route.params.lang=='fa'">
                        <img src="/index_template/index/assets/images/fa.webp" alt="">
                        <span>Persian</span>
                    </a>
                    <ul   :class="['sub-item', { d_block: IsActiveLang }]" >

                        <a :href="`${(this.$route.path).replace('/fa', '/en')}`">
                            <li>
                                <img src="/index_template/index/assets/images/english.png" alt=""> <span>English</span>
                            </li>
                        </a>

                        <a :href="`${(this.$route.path).replace('/en', '/fa')}`">
                            <li>
                                <img src="/index_template/index/assets/images/fa.webp" alt=""> <span>Persian</span>
                            </li>
                        </a>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" @click="handleLogout">
                        <i class="icon-sign-out-1"></i>
                        <span class="span_icon">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

</template>


<style>
.d_block{
    display: block!important;
}
</style>

<script>

import { getProfileUserAuth } from '@/services/user/get_profileuserauth.js';



export default {

    data() {
        return {
            myprofile: [],
            IsActiveI : false,
            IsActiveLang : false,

        }
    },

    created() {

        this.tell = localStorage.getItem('tell');
        this.email = localStorage.getItem('email');
        this.name = localStorage.getItem('name');
        this.image = localStorage.getItem('image');


    },
    methods: {


        async handleLogout() {

            var response = await getProfileUserAuth();
            var myprofile = response;

            // console.log(myprofile);
            // alert('hi');

            localStorage.removeItem('token');
            localStorage.removeItem('email');
            localStorage.removeItem('image');
            localStorage.removeItem('id');
            localStorage.removeItem('name');


            swal("از حساب کاربری با موفقیت خارج شدید", "خروج باموفقیت انجام شد", "success");
            window.location.href = window.location.origin + '/panel_logout/' + this.$route.params.lang + '/' + myprofile.remember_token;

        },
  toggleLiItem() {
  this.IsActiveI = !this.IsActiveI;
  },
  toggleLang(){
  this.IsActiveLang = !this.IsActiveLang;

  },


    }
}

</script>
