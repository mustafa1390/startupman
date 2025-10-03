<template>



        <Sidebar />
        <div class="content">
        <Navbar />
        <router-view />
        <Footer />
        </div>


  </template>



<script>
import Navbar  from '@/components/layout/Falcon/Navbar.vue';
import Sidebar from '@/components/layout/Falcon/Sidebar.vue';
import Footer from '@/components/layout/Falcon/Footer.vue';


export default {
  components: {
    Navbar ,
    Sidebar,
    Footer,

  },


};
</script>
