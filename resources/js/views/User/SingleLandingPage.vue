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
                                    <a href="#">{{ $t('SingleLandingPage') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 product-detail">
                <div class="themesflat-container">
                    <div class="row">

                        <div  class="col-sm-6 col-md-6  col-lg-12" >
                            <div data-wow-delay="1s" class="wow fadeInRight infor-product animated"
                            >
                                <div class="text">8SIAN Main Collection <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div>
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
                                                <a class="dropdown-item" href="#"><i class="icon-refresh"></i>Refresh metadata</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-report"></i>Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Themesflat #0270</h2>
                                <div class="author flex items-center mb-30">
                                    <div class="avatar">
                                        <img src="assets/images/avatar/avatar-box-05.jpg" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Owned by:</span>
                                        <h6><a href="author-1.html">Marvin McKinney</a> </h6>
                                    </div>
                                </div>
                                <div class="meta mb-20">
                                    <div class="meta-item view">
                                        <i class="icon-show"></i>208 view
                                    </div>
                                    <div class="meta-item rating">
                                        <i class="icon-link-2"></i>Top #2 trending
                                    </div>
                                    <div class="meta-item favorites">
                                        <i class="icon-heart"></i>10 favorites
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated visibility_show" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-clock"></i>Sale ends May 22 at 9:39</h6>
                                <div class="content">
                                    <div class="text">Current price</div>
                                    <div class="flex justify-between">
                                        <p>0,032 ETH <span>$58,11</span></p>
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button style-1 h50 w216">Place a bid<i class="icon-arrow-up-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div
      v-for="(item, index) in list_landing_pages"
      :key="index"
      @click="toggleeExpand(index)"
                            data-wow-delay="0s" class="wow fadeInRight product-item details animated visibility_show" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;"  >
                                <h6><i class="icon-description"></i>{{ item.id }} - {{ item.name }} - </h6>
                                <i
          class="icon-keyboard_arrow_down"
          :class="{ hiden: mytarget[index] }" ></i>
                                <div class="content"  v-show="mytarget[index]">
                                    <div class="details-item">
                                        <span>Contract Address</span>
                                        <span class="tf-color">0x1984...c38f</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token ID</span>
                                        <span class="tf-color">0270</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token Standard</span>
                                        <span class="">ERC-721</span>
                                    </div>

                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item traits animated visibility_show" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-description"></i>Traits</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
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


  setup() {

  }
  ,
  data() {
      return {
        list_landing_pages: [],
        mytarget: [],
      };
    },

        async created () {
         var list_landing_pages = await indexLandingPage()
        this.list_landing_pages = list_landing_pages;
        console.log(this.list_landing_pages);
        // alert('hi');
        },

    methods: {

        toggleeExpand(m){
            this.mytarget[m] =  !this.mytarget[m];
        }

    },
    async mounted() {
        this.mytarget[0] = true;

    }
}
</script>

