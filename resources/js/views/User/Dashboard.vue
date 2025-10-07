<template>



<div class="flat-title-page">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <h1 class="heading text-center">Blog list #1</h1> -->
                            <ul class="breadcrumbs flex">
                                <li class="icon-keyboard_arrow_right">
                                    <a href="">{{ $t('dashboard') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ $t('home') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="heading-section">
    <h2 class="tf-title pb-30" style="perspective: 400px;">
        <div style="display: block; text-align: start; position: relative;
        transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
         {{ $t('Select-Busines-page-type') }}
    </div>
    </h2>
</div>

<div class="widget-tabs relative" >
    <ul class="widget-menu-tab "   v-if="this.filteredbusinesCat!=''">
        <li class="item-title"  v-for="item   in    this.filteredbusinesCat" :key="item.id"  :class="{ active: item.id === activeId }"
        @click="dive(item.id)"  >
            <span class="inner">
                {{ $t(item.name) }}   </span>
        </li>
    </ul>
</div>


<div class="heading-section"  id="bottom-section">
    <h2 class="tf-title pb-30" style="perspective: 400px;">
        <div style="display: block; text-align: start; position: relative;
        transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
         {{ $t('Select-landing-page-type') }}
    </div>
    </h2>
</div>


<div class="widget-tabs relative"  >
    <ul class="widget-menu-tab "   v-if="this.filteredItems!=''">
        <li class="item-title" v-for="item   in    this.filteredItems" :key="item.id"  :class="{ active: item.id === activeSubId }"
        @click="dive_landing(item.id)" >
            <span class="inner">
                {{ $t(item.name) }}</span>
        </li>
    </ul>
</div>



<div class="heading-section"  id="landing-page-section">
    <h2 class="tf-title pb-30" style="perspective: 400px;">
        <div style="display: block; text-align: start; position: relative;
        transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
         {{ $t('Select-landing-page-type') }}
    </div>
    </h2>
</div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6  col-lg-12">
                            <form id="commentform" class="comment-form" @submit.prevent="store_landing">

                                                <fieldset class="name">
                                                    <label>   {{ $t('name') }}  * </label>
                                                    <input type="text" id="name_landing_page" placeholder="Product name"   v-model="name_landing_page" tabindex="2"
                                                    value=""
                                                    aria-required="true" required="">
                                                </fieldset>

                                                    <button class="tf-button style-1 h50 w320" type="submit"  :disabled="loading">


  <div v-if="loading" class="spinner"></div>
  <div   v-else>
    {{ $t("Sign_in") }}
  </div>
                                                        <!-- Submit item<i class="icon-arrow-up-right2"></i> -->

                                                    </button>

                                                    <p v-if="loading"> {{ $t("Entering") }} </p>


                                            </form>
                        </div>
                        <div class="col-6">


                        </div>
                        </div>




<div class="content-tabs">
                    <div id="create" class="tabcontent active">
                        <div class="wrapper-content-create">
                            <div class="heading-section">
                                <h2 class="tf-title pb-30" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Create New File</div></h2>
                            </div>
                            <div class="widget-tabs relative">
                                <ul class="widget-menu-tab">
                                    <li class="item-title">
                                        <span class="inner"><span class="order">1</span> Upload your image <i class="icon-keyboard_arrow_right"></i></span>
                                    </li>
                                    <li class="item-title active">
                                        <span class="inner"><span class="order">2</span>Description <i class="icon-keyboard_arrow_right"></i></span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner"><span class="order">3</span>Submit NFT</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>




</template>


      <script>
     import { getBusinesGroupList } from '@/services/busines_group/index_list_parent.js';
     import { storeLandingPage } from '@/services/landing_page/store_landing_page.js';
import { useNotification } from '@kyvg/vue3-notification';

import { useI18n } from 'vue-i18n';


export default {


    setup() {
        const { t } = useI18n();
        const { notify } = useNotification();
        const success = () => {
            notify({
                title: t('success'),
                text: t('request_successfully_submitted'),

                type: 'success',
                group: 'app',
                duration: 4000,
                speed: 1000,
            });
        };
                return {   t, success , }; 

    },
 data() {
      return {
        busines_group: [],
        post_store_landing_page: [],
        parent_id : 0,
        activeId: null,
        activeSubId: null,
        busines_group_id: null,
        inerror: null,
        insuccess: null,
        loading: false,


      };
    },
        async created () {
         var busines_group = await getBusinesGroupList()
        this.busines_group = busines_group;
        console.log(this.busines_group);
        // alert('hi');
        },

  computed: {
    filteredbusinesCat() {
      return this.busines_group.filter(item => item.parent_id == null);
    },
    filteredItems() {

      return this.busines_group.filter(item => item.parent_id == this.parent_id);
    },
},

    methods: {
    dive(m) {
        this.parent_id = m;
        this.activeId = m;

      const section = document.getElementById("bottom-section");
      if (section) {
        section.scrollIntoView({ behavior: "smooth" });
      }
    },
    async dive_landing(n) {
        this.activeSubId = n;
        this.busines_group_id = n;


      const section = document.getElementById("landing-page-section");
      if (section) {
        section.scrollIntoView({ behavior: "smooth" });
      }
    },


      async  store_landing() {

            this.loading = true;

 const credentials = {
        busines_group_id:  this.busines_group_id,
        name:  this.name_landing_page,
      };


        var post_store_landing_page = await storeLandingPage(credentials);
        this.post_store_landing_page =  post_store_landing_page;
        console.log(this.post_store_landing_page);

                this.success();
                swal({
                    title: this.$t('success'),
                    text: this.$t(this.insuccess),
                    icon: 'success',
                });

            // this.loading = false;
                            this.$router.push({ name: 'single_landing_page', params: { code: this.post_store_landing_page.code } });


      }
  },


    async mounted() {

        this.insuccess = 'Wallet_payment_gateway_successfully';
        this.inerror = 'Unfortunately_wallet_payment_failed';



        setTimeout(() => {
      this.loading = false;
    }, 3000);


    }
};
</script>


<style>
.stretched-link {
  text-decoration: none!important;
}
</style>


<style>
.spinner {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-left-color: #000;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}
</style>


