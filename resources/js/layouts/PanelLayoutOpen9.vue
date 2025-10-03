<template>

<!--  -->


            <div  :class="['btn-canvas', { active: isCanavas }]"   @click="toggleSidebar()">
                <div class="canvas">
                    <span></span>
                </div>
            </div>

    <div id="wrapper">
        <div id="page" class="home-6 flex">

    <div  :class="['section-menu-left', { null: isActiveesidebar }]" >

        <Sidebar />
        </div>



            <div   :class="['wrap-content', { full: isActivee }]" >
        <router-view />
        <Footer />
            </div>


            </div>
            </div>




  </template>



<script>
import Sidebar from '@/components/layout/Open9/Sidebar.vue';
import Footer from '@/components/layout/Open9/Footer.vue';


export default {
  components: {
    Sidebar,
    Footer,

  },

   data() {
      return {
          isActiveesidebar : false,
          isActivee : false,
          isCanavas : true,
      }

  },

  methods: {
  toggleSidebar() {
  this.isActivee = !this.isActivee;
  this.isActiveesidebar = !this.isActiveesidebar;
//   if(this.isActiveesidebar==true);
  this.isCanavas = !this.isCanavas;
  },




},
mounted(){



if (window.innerWidth <= 700) {

this.isActiveesidebar = true;
this.isActivee = true;
this.isCanavas = false;


} else {
this.isActiveesidebar = false;
this.isActivee = false;
this.isCanavas = true;

}
}


};
</script>
