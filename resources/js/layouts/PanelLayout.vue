<template>



        <Sidebar />
        <div class="content">
        <Navbar />
        <router-view />
        <Footer />
        </div>


  </template>



<script>
import Navbar  from '../components/layout/Navbar.vue';
import Sidebar from '../components/layout/Sidebar.vue';
import Footer from '../components/layout/Footer.vue';


export default {
  components: {
    Navbar ,
    Sidebar,
    Footer, 

  },


};
</script>
