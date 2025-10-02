<template>


            <div class="section-menu-left">
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
                            <a href="index.html"><i class="icon-home-alt"></i> <span class="span_icon">Home</span></a>
                        </li>
                        <li>
                            <a href="about-us.html"><i class="icon-gem-1"></i><span class="span_icon">About us</span> </a>
                        </li>
                        <li class="has-item">
                        <!-- <li class="has-item active"> -->
                            <a class="button-sub-item"><i class="icon-link"></i><span class="span_icon">Explore</span> </a>
                            <ul class="sub-item">
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
                        <li class="has-item language relative">
                            <a class="button-sub-item"><img src="/index_template/index/assets/images/english.png" alt=""> <span>English</span></a>
                            <ul class="sub-item">
                                <li><img src="/index_template/index/assets/images/english.png" alt=""> <span>English</span></li>
                                <li><img src="/index_template/index/assets/images/fa.webp" alt=""> <span>Persian</span></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"  @click="handleLogout">
                                <i class="icon-sign-out-1"></i>
                                <span class="span_icon">Logout</span>
                                 </a>
                        </li>
                    </ul>
                </div>
            </div>

</template>


<script>

import { getProfileUserAuth } from '@/services/user/get_profileuserauth.js';



export default {

  data() {
    return {
      myprofile: [],

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

var response =  await getProfileUserAuth();
var myprofile = response;

// console.log(myprofile);
// alert('hi');

localStorage.removeItem('token');
localStorage.removeItem('email');
localStorage.removeItem('image');
localStorage.removeItem('id');
localStorage.removeItem('name');


swal("از حساب کاربری با موفقیت خارج شدید", "خروج باموفقیت انجام شد", "success");
window.location.href = window.location.origin+'/panel_logout/'+this.$route.params.lang+'/'+myprofile.remember_token;

},



}
}

</script>

