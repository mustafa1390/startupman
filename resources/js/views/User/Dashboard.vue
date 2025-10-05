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
                {{ item.name }} </span>
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
                {{ item.name }}</span>
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







</template>


      <script>
     import { getBusinesGroupList } from '@/services/busines_group/index_list_parent.js';
     import { storeLandingPage } from '@/services/landing_page/store_landing_page.js';

export default {
 data() {
      return {
        busines_group: [],
        post_store_landing_page: [],
        parent_id : 0,
        activeId: null,
        activeSubId: null,


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

        const credentials = {
        busines_group_id:  n,
      };


        var post_store_landing_page = await storeLandingPage(credentials);
        this.post_store_landing_page =  post_store_landing_page;
        console.log(this.post_store_landing_page);

      const section = document.getElementById("landing-page-section");
      if (section) {
        section.scrollIntoView({ behavior: "smooth" });
      }
    },
  }
};
</script>


<style>
.stretched-link {
  text-decoration: none!important;
}
</style>

