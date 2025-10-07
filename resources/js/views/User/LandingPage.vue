<template>




            <div class="tf-section-2 discover-item loadmore-12-item">
                <div class="themesflat-container">
                    <div class="row"  v-if="this.list_landing_pages!=''">

                        <div v-for="item   in    this.list_landing_pages" :key="item.id"
                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 animated" >
                            <div class="tf-card-box style-1">
                                <div class="card-media">

                                            <router-link :to="{ name: 'single_landing_page', params: { code:  item.code }   }"  >




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
                                                <a class="dropdown-item" href="#">
                                                    <!-- <i class="icon-trash" > -->
                                                    <img src="/index_template/index/assets/icon/png/delete.png" />
                                                <!-- </i> -->
                                                Refresh metadata</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-report"></i>Report

                                                    <span class="wishlist-button">
                                                        <img src="/index_template/index/assets/icon/png/delete.png" />
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>
            </div>


</template>


<script>
     import { indexLandingPage } from '@/services/landing_page/index_landing_page.js';


export default {

 data() {
      return {
        list_landing_pages: [],


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

}
</script>

