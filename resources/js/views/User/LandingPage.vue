<template>




            <div class="tf-section-2 discover-item loadmore-12-item">
                <div class="themesflat-container">
                    <div class="row"  v-if="this.list_landing_pages!=''">

                        <div v-for="item   in    this.list_landing_pages" :key="item.id"
                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 animated" >
                            <div class="tf-card-box style-1">
                                <div class="card-media">





                             <div class="menu_card">
                                    <!-- <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-link-1"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                                <a class="dropdown-item" href="#"><i class="icon-facebook"></i>Share on facebook</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-twitter"></i>Share on twitter</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-content"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">


                                                <a href="javascript:void(0);"  class="dropdown-item mb-0" @click="openModal(item.code)"   >
                                                     <!-- <span class="material-icons text-900 fs-6">fingerprint</span> -->
                                                     <span class="material-icons text-900 fs-6">delete</span>

                                                {{ $t('delete') }}

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            <router-link :to="{ name: 'single_landing_page', params: { code:  item.code }   }"  >

                                                                                   <img src="/index_template/index/assets/images/item-background/item8.png" alt="">
                                   </router-link>
                                    <span class="wishlist-button icon-heart"></span>


                                </div>
                                <h5 class="name">                                            <router-link :to="{ name: 'single_landing_page', params: { code:  item.code }   }"  >

                                    {{ item.name }}

                                                 </router-link></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="assets/images/avatar/avatar-box-01.jpg" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Created by:</span>
                                        <h6>{{ item.code }}</h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>



                            </div>
                        </div>



                    </div>
                </div>
            </div>



    <div
      v-if="showModal"
      class="modal-overlay"
      @click.self="closeModal"
    >



      <div class="modal-content">


            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="closeModal">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                       <form id="commentform" class="comment-form" @submit.prevent="delete_landing">

                        <h>{{ code_target }}</h>
                        <h2>Subscribe to our newsletter</h2>
                        <p>Subscribe for our newsletter to stay in the loop</p>

                        <!-- <a href="" class="tf-button style-1 h50">Subscribe<i class="icon-arrow-up-right2"></i></a> -->


                        <button  class="tf-button style-1 h50" type="submit"  :disabled="loading"  >


                            <div v-if="loading" class="spinner"></div>

                            <div   v-else>

                                {{ $t("Sign_in") }}

                            </div>


                        </button>

                                                    <p v-if="loading"> {{ $t("Entering") }} </p>

                        </form>
                    </div>
                </div>
            </div>



      </div>
    </div>

</template>


<script>
     import { indexLandingPage } from '@/services/landing_page/index_landing_page.js';
     import { deleteLandingPage } from '@/services/landing_page/delete_landing_page.js';
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
        list_landing_pages: [],
        message: [],
        type_modal: 'delete',
      showModal: false,
      code_target: null,
        loading: false,
    };
    },
        async created () {
         var list_landing_pages = await indexLandingPage()
        this.list_landing_pages = list_landing_pages;
        console.log(this.list_landing_pages);
        // alert('hi');
        },
    components: {

    },
  methods: {
    openModal(m) {
      this.showModal = true;
      this.code_target = m;
    },
    closeModal() {
      this.showModal = false;
    },
  async delete_landing(){
            this.loading = true;

 const credentials = {
        code:  this.code_target,
      };


        var message = await deleteLandingPage(credentials);
        this.message =  message;
        console.log(this.message);


         var list_landing_pages = await indexLandingPage()
        this.list_landing_pages = list_landing_pages;

    // alert(this.code_target);

                this.success();
                swal({
                    title: this.$t('success'),
                    text: this.$t(this.insuccess),
                    icon: 'success',
                });
                this.closeModal();


  }
},
async mounted() {

        this.insuccess = 'Wallet_payment_gateway_successfully';
        this.inerror = 'Unfortunately_wallet_payment_failed';



        setTimeout(() => {
      this.loading = false;
    }, 3000);


    }

}
</script>



<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 999;
}
.modal-content {
  background: #fff;
  padding: 1.5rem;
  border-radius: 8px;
  max-width: 500px;
  width: 90%;
  position: relative;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.close-btn {
  font-size: 1.5rem;
  border: none;
  background: none;
  cursor: pointer;
}


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

